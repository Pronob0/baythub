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

        if($request->hasFile('portfolio')){
            $images = $request->file('portfolio');
            $imageArray = array();
            foreach($images as $image){
                $image_name =Str::random(6). time().'.'.$image->getClientOriginalExtension();
                $image->move('assets/images/portfolio',$image_name);
                $imageArray[] = $image_name;
            }
            $input['portfolio'] = implode(',',$imageArray);
           
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
}


