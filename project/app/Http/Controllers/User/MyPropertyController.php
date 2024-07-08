<?php

namespace App\Http\Controllers\User;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Generalsetting;
use App\Models\Investment;
use App\Models\PaymentGateway;
use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Transaction;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MyPropertyController extends Controller
{


    public function __construct()
    {


        $data = PaymentGateway::whereKeyword('Stripe')->first();
        $paydata = $data->convertAutoData();

        \Stripe\Stripe::setApiKey($paydata['secret']);
    }


    public function feature(Request $request){

        if(!auth()->check()){
             return redirect()->back()->with('warning','Please Login First');
         }
 
         $gs = Generalsetting::findOrFail(1);
         $item_name = $gs->title." Featured";
         $currency= Currency::where('is_default','=',1)->first();
        
         $item_amount = $request->amount;
 
         $support = ['USD','GBP','EUR'];
         if(!in_array($currency->name,$support)){
             return redirect()->back()->with('warning','Please Select valid Currency For Stripe.');
         }
 
         Session::put('request',$request->all());
 
 
             $session = \Stripe\Checkout\Session::create([
                 "line_items" => [
                     [
                         "quantity" => 1,
                         "price_data" => [
                             "currency" => $currency->name,
                             "unit_amount" =>$item_amount*100,
                             "product_data" => [
                                 "name" => $gs->title . 'Feature'
                             ]
                         ]
                     ]
                     ],
                 'mode' => 'payment',
                 "locale" => "auto",
                 'success_url' => route('feature.checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
                 'cancel_url' => route('stripe.cancel', [], true),
               ]);
               return redirect($session->url);
        
     }


     public function success(Request $request)
    {
        $currency= Currency::where('is_default','=',1)->first();
        $user= Auth::user();
        $gs= Generalsetting::first();
        
        $sessionId = $request->get('session_id');

        try{
            
            $session = \Stripe\Checkout\Session::retrieve($sessionId);

        
            if (!$session) {
                throw new NotFoundHttpException;
            }
            $item_number = Str::random(4).time();
            $request = Session::get('request');

            if ($session->payment_status == 'paid'  && $session->status=='complete') {
                
                $addionalData = ['item_number'=>$item_number,'txnid'=>$session->payment_intent,'charge_id'=> $sessionId ];
                $days= $request['days'];


                if($request['type'] == 'property'){
                    $advertise = Advertisement::findOrFail($request['id']);
                    $advertise->is_featured = 1;
                    $advertise->feature_date = Carbon::now()->addDays($days);
                    $advertise->save();

                }
                elseif($request['type'] == 'invest'){
                    $invest = Investment::findOrFail($request['id']);
                    $invest->is_featured = 1;
                    $invest->feature_date = Carbon::now()->addDays($days);
                    $invest->save();

                }

                else{
                    $service = Service::findOrFail($request['id']);
                    $service->is_featured = 1;
                    $service->feature_date = Carbon::now()->addDays($days);
                    $service->save();
                }

               


                // Transaction 
                $transaction = new Transaction();
                $transaction->trnx_number = $item_number;
                $transaction->user_id = $user->id;
                $transaction->amount = $request['amount'];
                $transaction->currency_id = $currency->id;
                $transaction->type = '-';
                $transaction->remark = 'Featured';
                $transaction->details = 'Feature of '.$gs->title;
                $transaction->save();



        if($gs->email_notify == 1)
        {
            $data = [
                'to' => $user->email,
                'type' => "Feature",
                'cname' => $user->name,
                'oamount' => $request['amount'],
                'aname' => "",
                'aemail' => "",
                'wtitle' => "",
                
            ];

            $mailer = new GeniusMailer();
            $mailer->sendAutoMailtwo($data);
        }
        else
        {
           $to = $user->email;
           $subject = " You have featured successfully.";
           $msg = "Hello ".$user->name."!\nYou have Upgraded Plan successfully.\nThank you.";
           $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
           mail($to,$subject,$msg,$headers);
        }

                return redirect()->back()->with('message','Feature successfully complete.');
            }

        }catch (Exception $e){
            return back()->with('unsuccess', $e->getMessage());
        }

    }




    public function index()
    {
        $advertisements = Advertisement::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->paginate(20);
        return view('user.property.index', compact('advertisements'));
    }

    public function destroy($id)
    {

        $advertisement = Advertisement::find($id);

        if ($advertisement->photo) {
            $images = explode(',', $advertisement->photo);
            foreach ($images as $image) {
                @unlink('assets/images/advertisement/' . $image);
            }
           
        }
        $usercontact = $advertisement->usercontacts;
        if ($usercontact->count() > 0) {
            foreach ($usercontact as $contact) {
                $userowner = $contact->conversations;
                foreach ($userowner as $owner) {
                    $owner->delete();
                }
            }
            $usercontact->delete();
        }

        $advertisement->delete();

        Toastr::success('Advertisement Deleted Successfully', 'Success');
    }

    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $cities = Country::get();
        return view('user.property.edit', compact('advertisement', 'categories', 'subCategories', 'cities'));
    }

    public function update(Request $request, $id)
    {


        $validator = Validator::make($request->all(), [
            'floor_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|max:30',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $input = $request->all();



        $advertisement = Advertisement::find($id);


        $input['category_id'] = $request->category_id;
        // array to string 
        if (isset($request->amenities)) {
            $input['amenities'] = implode(',', $request->amenities);
        }
        if (isset($request->property_type)) {
            $input['property_type'] = implode(',', $request->property_type);
        }
        if (isset($request->bedroom)) {
            $input['bedroom'] = implode(',', $request->bedroom);
        }
        if (isset($request->bathroom)) {
            $input['bathroom'] = implode(',', $request->bathroom);
        }
        if (isset($request->reception)) {
            $input['reception'] = implode(',', $request->reception);
        }
        if (isset($request->require)) {
            $input['require'] = implode(',', $request->require);
        }
        // features
        if (isset($request->features)) {
            $input['features'] = implode(',', $request->features);
        }
        // tenance
        if (isset($request->tenance)) {
            $input['tenance'] = implode(',', $request->tenance);
        }

        if (isset($request->is_room_wanted)) {
            // about you json 

            $age = $request->age;
            $occupation = $request->occupation;
            $nationality = $request->nationality;
            $language = $request->language;
            $gender = $request->gender;
            $name = $request->your_name;
            $smoke = $request->smoke;
            $pets = $request->pets;

            $input['about_you'] = json_encode([
                'age' => $age,
                'occupation' => $occupation,
                'nationality' => $nationality,
                'language' => $language,
                'gender' => $gender,
                'name' => $name,
                'smoke' => $smoke,
                'pets' => $pets,
            ]);


            // about flatmate json
            $mate_age = $request->mate_age;
            $mate_occupation = $request->mate_occupation;
            $mate_gender = $request->mate_gender;
            $mate_smoke = $request->mate_smoke;
            $mate_pets = $request->mate_pets;

            $input['about_flatmte'] = json_encode([
                'mate_age' => $mate_age,
                'mate_occupation' => $mate_occupation,
                'mate_gender' => $mate_gender,
                'mate_smoke' => $mate_smoke,
                'mate_pets' => $mate_pets,
            ]);
        }


        if ($request->is_tenancy == 1) {
            $input['is_tenancy'] = 1;
            $monthly_rent = $request->monthly_rent;
            $month = $request->month;
            $weekly_rent = $request->weekly_rent;
            $tenance_number = $request->tenance_number;
            $deposit = $request->deposit;
            $date = $request->date;
            $input['tenant_details'] = json_encode([
                'monthly_rent' => $monthly_rent,
                'month' => $month,
                'weekly_rent' => $weekly_rent,
                'tenance_number' => $tenance_number,
                'deposit' => $deposit,
                'date' => $date,
            ]);
        }





        // multiple image upload as string
        if ($request->hasFile('photo')) {
            $images = $request->file('photo');
            $imageArray = array();
            foreach ($images as $image) {
                $image_name = Str::random(6) . time() . '.' . $image->getClientOriginalExtension();
                $image->move('assets/images/advertisement', $image_name);
                $imageArray[] = $image_name;
            }

            $input['photo'] = implode(',', $imageArray);
        }

        if ($request->hasFile('floor_pic')) {
            $image = $request->file('floor_pic');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assets/images/floor', $image_name);
            $input['floor_pic'] = $image_name;
        }



        // cost as json 
        if ($request->subcategory_id == 5) {
            $rent_pm = $request->rent_pm;
            $rent_deposit = $request->rent_deposit;
            $damage_deposit = $request->damage_deposit;
            $agency_fee = $request->agency_fee;
            $potential_rent = $request->potential_rent;

            if ($request->rent_pm != null || $request->rent_deposit != null || $request->damage_deposit != null || $request->agency_fee != null || $request->potential_rent != null) {
                $input['cost'] = json_encode([
                    'rent_pm' => $rent_pm,
                    'rent_deposit' => $rent_deposit,
                    'damage_deposit' => $damage_deposit,
                    'agency_fee' => $agency_fee,
                    'potential_rent' => $potential_rent,
                ]);
            }
        } elseif ($request->subcategory_id == 6) {

            $rent_pm = $request->rent_pm;
            $potential_rent = $request->potential_rent;
            $agency_fee = $request->agency_fee;


            if ($request->rent_pm != null  || $request->agency_fee != null || $request->potential_rent != null) {
                $input['cost'] = json_encode([
                    'rent_pm' => $rent_pm,
                    'potential_rent' => $potential_rent,
                    'agency_fee' => $agency_fee,

                ]);
            }
        }
        $advertisement->fill($input)->save();
        Toastr::success('Advertisement Updated Successfully', 'Success');
        return redirect()->back();
    }




}
