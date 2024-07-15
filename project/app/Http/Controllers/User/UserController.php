<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Helpers\MediaHelper;
use App\Models\Investment;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\UserContact;
use App\Models\UserOwnerConversation;
use App\Models\Verification;
use App\Models\Wishlist;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

       
        return view('user.dashboard');
        
    }

    public function profileUpdate(Request $request)
    {
        $validatior = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'photo' => 'mimes:jpeg,jpg,png,gif',
            'description' => 'required',

        ]);

        if($validatior->fails()){
            return redirect()->back()->withErrors($validatior)->withInput();
        }

        $user = auth()->user();
        $input = $request->all();
        if( $request->hasFile('photo') ){
            $image = $request->file('photo');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/images',$image_name);
            @unlink('assets/images/'.$user->photo);
            $input['photo'] = $image_name;
        }


        

        if($request->skills){
            $input['skills'] = implode(',',$request->skills);

        }


        if ($request->hasFile('portfolio')) {
            $images = $request->file('portfolio');
            
            $imageArray = array();
            foreach ($images as $image) {
                $image_name = Str::random(6) . time() . '.' . $image->getClientOriginalExtension();
                $image->move('assets/images/portfolio', $image_name);
                $imageArray[] = $image_name;
            }

            $input['portfolio'] = implode(',', $imageArray);
        }
        
        $user->fill($input)->save();

       

        return redirect()->back()->with('message','Profile updated successfully');
    }

    public function portfolioDelete($slug){
        $user = auth()->user();
        $portfolio = explode(',',$user->portfolio);
        $key = array_search($slug,$portfolio);
        unset($portfolio[$key]);

        unlink('assets/images/portfolio/'.$slug);

        $portfolio = implode(',',$portfolio);
        $user->portfolio = $portfolio;
        $user->save();
        return response()->json(['status'=>'success','message'=>'Portfolio deleted successfully']);
    }

    public function message( Request $request){
        $user = auth()->user();
        $tickets =UserContact::where('owner_id',$user->id)->orwhere('user_id',$user->id)->orderBy('id','DESC')->get();
        $messages = UserOwnerConversation::when($request->ticket,function($query) use ($request){
            return $query->where('contact_id',$request->ticket);
        })
        ->get();
        $ticket = UserContact::where('owner_id',$user->id)->orwhere('user_id',$user->id)->orderBy('id','DESC')->first();
        return view('user.message',compact('tickets','messages','ticket'));

    }


    public function wishlist(){
        $wishlists = Wishlist::where('user_id',auth()->user()->id)->paginate(15);
        return view('user.wishlist',compact('wishlists'));
    }

    public function wishlistDelete($id){
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        return redirect()->back()->with('message','Wishlist deleted successfully');
    }

    public function postReply( Request $request, $id){
        
        $input = $request->all();
        $contact = UserContact::find($id);
        $conversation = new UserOwnerConversation();
        $conversation->contact_id = $contact->id;
        $conversation->owner_id = $contact->user_id;
        $conversation->user_id = $contact->owner_id;
        $conversation->messages = $request->messages;
        $conversation->save();

       
        return redirect()->back()->with('message','Message sent successfully');
    }

    public function verification(){
        $user = auth()->user();
        return view('user.verification',compact('user'));
    }


    public function verificationSubmit(Request $request){


        $verify = Verification::where('user_id',auth()->user()->id)->first();
        if($verify){
            if($verify->status != 2){
                return redirect()->back()->with('message','Verification already submitted');
            }

        }

        $validator = Validator::make($request->all(),[
            'qualification' => 'required',
            'telephone' => 'required',
            'id_image' => 'required|mimes:jpeg,jpg,png,gif',
            'criminal_record' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        if($validator->fails()){
            foreach($validator->errors()->all() as $error){
              Toastr::error($error);
            }
            
        }


        $user = auth()->user();
        $input = $request->all();
        if( $request->hasFile('id_image') ){
            $image = $request->file('id_image');
            $image_name =Str::random(5).time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/images',$image_name);
            $input['id_image'] = $image_name;
        }
        if( $request->hasFile('criminal_record') ){
            $image = $request->file('criminal_record');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/images',$image_name);
            $input['criminal_record'] = $image_name;
        }

        $input['user_id'] = $user->id;
        Verification::create($input);
        return redirect()->back()->with('message','Verification submitted successfully');
    }

   public function myServices(){
         $user = auth()->user();
         $services = Service::where('user_id',$user->id)->paginate(10);
         return view('user.service.index',compact('services'));
   }

   public function serviceDelete($id){
       $service = Service::find($id);

         if($service->photo){
              @unlink('assets/images/'.$service->photo);
         }
            $usercontact = $service->usercontacts;
            if($usercontact->count() > 0){
                foreach($usercontact as $contact){
                    $userowner = $contact->conversations;
                    foreach($userowner as $owner){
                        $owner->delete();
                    }
                }
                $usercontact->delete();
            }
       $service->delete();
       return redirect()->back()->with('message','Service deleted successfully');
   }

   public function allinvest(){
    $user = auth()->user();
    $investments = Investment::where('user_id',$user->id)->paginate(10);
    return view('user.investment.index',compact('investments'));
   }
   
   public function editInvest($id){
        $item = Investment::findOrFail($id);
        $cities = Country::get();
        return view('user.investment.edit',compact('item','cities'));
    }


   public function investDelete($id)
    {

        $advertisement = Investment::find($id);

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

        Toastr::success('Investment Deleted Successfully', 'Success');
    }
    
    
    public function updateInvest(Request $request, $id) {
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'location' => 'required|string|max:255', // Fixed the field name
        'city_id' => 'required|exists:countries,id',
        'developer' => 'required|string|max:255',
        'starting_price' => 'required|numeric',
        'description' => 'nullable|string',
        'property_type' => 'required|array',
        'property_type.*' => 'required|string|max:255',
        'handover_date' => 'required|date',
        'payment_plan' => 'required|string|max:255',
        'building_name' => 'nullable|string|max:255',
        'unit_count' => 'required|integer',
        'floor_count' => 'required|integer',
        'parking_space' => 'required|integer',
        'down_payment' => 'required|numeric',
        'during_construction' => 'required|numeric',
        'on_handover' => 'required|numeric',
        'announcement_date' => 'required|date',
        'construction_started' => 'required|date',
        'booking_started' => 'required|date',
        'expected_handover' => 'required|date',
        'amenities' => 'required',
        'photo.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the investment by ID
    $investment = Investment::findOrFail($id);

    // Update bed sizes and prices
    $bedSizes = [
        'onebed' => $request->input('1bed_size'),
        'twobed' => $request->input('2bed_size'),
        'threebed' => $request->input('3bed_size'),
        'fourbed' => $request->input('4bed_size'),
        'fivebed' => $request->input('5bed_size'),
        'sixbed' => $request->input('6bed_size'),
        'sevenbed' => $request->input('7bed_size'),
    ];

    $bedPrices = [
        'onebed' => $request->input('1bed_price'),
        'twobed' => $request->input('2bed_price'),
        'threebed' => $request->input('3bed_price'),
        'fourbed' => $request->input('4bed_price'),
        'fivebed' => $request->input('5bed_price'),
        'sixbed' => $request->input('6bed_price'),
        'sevenbed' => $request->input('7bed_price'),
    ];

    // Handle photo upload
    if ($request->hasFile('photo')) {
        $images = $request->file('photo');
        $imageArray = array();
        foreach ($images as $image) {
            $image_name = Str::random(6) . time() . '.' . $image->getClientOriginalExtension();
            $image->move('assets/images/advertisement', $image_name);
            $imageArray[] = $image_name;
        }
        $newphoto = implode(',', $imageArray);
    } else {
        $newphoto = $investment->photo;
    }

    // Update investment fields
    $investment->update([
        'user_id' => $request->user_id,
        'name' => $request->name,
        'location' => $request->location, // Fixed the field name
        'city_id' => $request->city_id,
        'developer' => $request->developer,
        'starting_price' => $request->starting_price,
        'description' => $request->description,
        'property_type' => implode(',', $request->property_type),
        'handover_date' => $request->handover_date,
        'payment_plan' => $request->payment_plan,
        'building_name' => $request->building_name,
        'unit_count' => $request->unit_count,
        'floor_count' => $request->floor_count,
        'parking_space' => $request->parking_space,
        'down_payment' => $request->down_payment,
        'during_construction' => $request->during_construction,
        'on_handover' => $request->on_handover,
        'announcement_date' => $request->announcement_date,
        'construction_started' => $request->construction_started,
        'booking_started' => $request->booking_started,
        'expected_handover' => $request->expected_handover,
        'amenities' => $request->amenities,
        'bed_sizes' => json_encode($bedSizes),
        'bed_prices' => json_encode($bedPrices),
        'photo' => $newphoto,
    ]);

Toastr::success('Advertisement updated successfully', 'Success');
    return redirect()->back();
}


    
}


