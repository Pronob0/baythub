<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Advertisement;
use App\Models\Blog;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\ContactPage;
use App\Models\Generalsetting;
use App\Models\HeaderSection;
use App\Models\Plan;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\UserContact;
use App\Models\UserOwnerConversation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Helpers\MediaHelper;
use App\Models\BlogCategory;
use App\Models\Country;
use Illuminate\Support\Str;
use App\Models\Page;


class FrontendController extends Controller
{
    
    public function index()
    {
        $gs = Generalsetting::first();
        $category = Category::orderBy('id','DESC')->get();
        $buyers = Advertisement::where('category_id',11)->where('type','buy')->orderBy('id','DESC')->take(3)->get();
        $exclusives = Advertisement::where('category_id',12)->orderBy('id','DESC')->take(3)->get();
        $rooms = Advertisement::where('category_id',13)->orderBy('id','DESC')->get();
        $blogs = Blog::orderBy('id','DESC')->take(3)->get();
        $section = HeaderSection::first();

        $cities = Country::take(6)->get();

        return view('frontend.index', compact('gs', 'category', 'buyers', 'exclusives', 'rooms', 'blogs', 'section',  'cities'));
    }

    public function chooseAdvertCategory(){
        $categories = Category::all();
        return view('frontend.postAdvert', compact('categories'));
    }

    public function plan(){
        $plans = Plan::orderBy('id','DESC')->take(3)->get();
        return view('frontend.plan', compact('plans'));
    }

    public function browseAdvertCategory(){
        $categories = Category::all();
        return view('frontend.browseAdvert', compact('categories'));
    }

    public function browseAdvertCity($id, $type, $cityid)
    {
        $category = Category::findOrFail($id);
        $cityid = $cityid;
        $type = $type;
        $request = new Request();

      $all =  $this->browseAdvert($request,$category->slug, $type, $cityid);
      $items=  $all['items'];
      $category = $all['category'];
      $subs = $all['subs'];
       $type = $all['type'];
        $cities = $all['cities'];


      return view('frontend.browseAdvertCategory', compact('items', 'category', 'subs', 'type', 'cities'));
        
    }


    public function browseAdvert(Request $request, $slug, $type, $id=null){

      



        $category = Category::where('slug', $slug)->first();
        $cities = Country::all();
       
        $subs=$category->subcategories;
        $type = $type;
        if($category->id == 11){

            if($type == 'rent'){

                $items = Advertisement::where('category_id', $category->id)->where('type', $type)->where('city_id', $id)
                ->when($request->budget, function($query, $budget){
                    return $query->where('budget', '<=', $budget);
                })
                // room sizes 
                ->when($request->room_size, function($query, $room_size){
                    return $query->where('room_sizes', $room_size);
                })
                // postcode 
                ->when($request->postcode, function($query, $postcode){
                    return $query->where('postcode', $postcode);
                })
                // json_decode about_flatmate
                ->when($request->gender, function($query, $about_flatmate){
                    return $query->where('about_flatmate', 'LIKE', '%'.$about_flatmate.'%');
                })
                ->paginate(12);
                if($id){
                    return $result = [
                        'items' => $items,
                        'category' => $category,
                        'subs' => $subs,
                        'type' => $type,
                        'cities' => $cities,
                        'cityid' => $id
                    ];
                   
                }
                return view('frontend.browseAdvertCategory', compact('items', 'category', 'subs', 'type', 'cities'));
            }
            else{
                

            $items = Advertisement::where('category_id', $category->id)->where('type', $type)->where('city_id', $id)
            ->when($request->budget, function($query, $budget){
                return $query->where('budget', '<=', $budget);
            })
            ->when($request->room_size, function($query, $room_size){
                return $query->where('room_sizes', $room_size);
            })
            ->when($request->town_id, function($query, $town_id){
                return $query->where('town_id', $town_id);
            })
            //find gender from about_flatmate json_decode
            ->when($request->gender, function($query, $about_flatmate){
                return $query->where('about_flatmate->mate_gender', $about_flatmate);
            })

            ->paginate(12);
            if($id){
                return $result = [
                    'items' => $items,
                    'category' => $category,
                    'subs' => $subs,
                    'type' => $type,
                    'cities' => $cities,
                    'cityid' => $id
                ];
               
            }
            return view('frontend.browseAdvertCategory', compact('items', 'category', 'subs', 'type','cities'));

            }
            
            
        }
        if($category->id == 12){
            $items = Advertisement::where('category_id', $category->id)->where('city_id', $id)
            // subcategory
            ->when($request->subcategory, function($query, $sub_category){
                return $query->where('subcategory_id', $sub_category);
            })
            
            ->when($request->city_id, function($query, $city_id){
                return $query->where('city_id', $city_id);
            })
            // strategy
            ->when($request->strategy, function($query, $strategy){
                return $query->where('strategy', $strategy);
            })
            // table property_type is an array
            ->when($request->property_type, function($query, $property_type){
                return $query->where('property_type', 'LIKE', '%'.$property_type.'%');
            })

            ->paginate(12);
            if($id){
                return $result = [
                    'items' => $items,
                    'category' => $category,
                    'subs' => $subs,
                    'type' => $type,
                    'cities' => $cities,
                    'cityid' => $id
                ];
               
            }

           
            return view('frontend.browseAdvertCategory', compact('items', 'category', 'subs', 'type','cities'));
        }
        elseif($category->id == 13){
            $items = Advertisement::where('category_id', $category->id)->where('city_id', $id)

            ->when($request->property_type, function($query, $sub_category){
                return $query->where('subcategory_id', $sub_category);
            })

            ->when($request->budget, function($query, $budget){
                return $query->where('budget', '<=', $budget);
            })

            ->when($request->bedroom,function($query, $bedroom){
                return $query->where('bedroom',$bedroom);
            })
            
            ->paginate(12);
            if($id){
                return $result = [
                    'items' => $items,
                    'category' => $category,
                    'subs' => $subs,
                    'type' => $type,
                    'cities' => $cities,
                    'cityid' => $id
                ];
               
            }
            return view('frontend.browseAdvertCategory', compact('items', 'category', 'subs', 'type', 'cities'));
        }

        elseif($category->id == 14){
            $items = Advertisement::where('category_id', $category->id)->where('city_id', $id)

            ->when($request->property_type, function($query, $sub_category){
                return $query->where('subcategory_id', $sub_category);
            })

            ->when($request->budget, function($query, $budget){
                return $query->where('budget', '<=', $budget);
            })

            ->when($request->bedroom,function($query, $bedroom){
                return $query->where('bedroom',$bedroom);
            })
            
            ->paginate(12);
            if($id){
                return $result = [
                    'items' => $items,
                    'category' => $category,
                    'subs' => $subs,
                    'type' => $type,
                    'cities' => $cities,
                    'cityid' => $id
                ];
               
            }
            return view('frontend.browseAdvertCategory', compact('items', 'category', 'subs', 'type', 'cities'));
        }

       
    }
    public function advertiseDetails($id){
        $item = Advertisement::findOrFail($id);
        return view('frontend.advertiseDetails', compact('item'));
    }

    public function allUserAdvert($id){
        $user = User::findOrFail($id);
        $advert = Advertisement::where('user_id', $user->id)->paginate(21);
        return view('frontend.allUserAdvert', compact('user', 'advert'));
    }

    public function contactPropertyUser(Request $request){
        
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                Toastr::error($error, 'Error');
            }
        }

    // is not auth 
        if(!auth()->check()){
            return redirect()->back()->with('error', 'You need to login to contact ');
        }
        if(auth()->user()->id == $request->owner_id){
            return redirect()->back()->with('error', 'You cannot contact yourself');
        }
        $owner = User::findOrFail($request->owner_id);
        if(auth()->user()->is_plan == 0 && $owner->is_plan == 0){
            return redirect()->back()->with('error', 'You need to subscribe to a plan to contact ');
        }

        // if exist in user contact table don't allow
        if($request->is_service== 1){
            $contact = UserContact::where('user_id', auth()->user()->id)->where('property_id', $request->property_id)->where('is_service', 1)->first();

            if($contact){
                return redirect()->back()->with('error', 'You have already contacted this service');
            }
           
        }
        else{
            $contact = UserContact::where('user_id', auth()->user()->id)->where('property_id', $request->property_id)->where('is_service', 0)->first();

            if($contact){
                return redirect()->back()->with('error', 'You have already contacted this property');
            }
        }
       

        $contact = new UserContact();
        $contact->ticket_number = 'TKT'.str_rand(6);
        $contact->property_id = $request->property_id;
        $contact->user_id = auth()->user()->id;
        $contact->owner_id = $request->owner_id;
        $contact->messages = $request->message;
        $contact->phone = $request->phone;
        if($request->is_service){
            $contact->is_service = 1;
        }
        $contact->save();

        $conversation = new UserOwnerConversation();
        $conversation->user_id = $contact->user_id;
        $conversation->owner_id = $contact->owner_id;
        $conversation->contact_id = $contact->id;
        $conversation->messages = $contact->messages;
        if($request->is_service){
            $contact->is_service = 1;
        }
        $conversation->save();


        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);
        $gs=Generalsetting::first();

        try {
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = $gs->smtp_host;             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = $gs->smtp_user;   //  sender username
            $mail->Password = $gs->smtp_pass;       // sender password
            $mail->SMTPSecure =$gs->mail_encryption;                  // encryption - ssl/tls
            $mail->Port = $gs->smtp_port;                          // port - 587/465
            $mail->setFrom(auth()->user()->email,auth()->user()->name);
            $mail->addAddress($owner->email);
            $mail->addReplyTo($owner->email, $owner->name);
            $mail->isHTML(true);  
            if($request->is_service){
                $mail->Subject = 'Service Request';
                
            }     
            else{
                $mail->Subject = 'Contact Property Owner';
            }         // Set email content format to HTML
            // $mail->Subject = 'Contact Property Owner';
            $mail->Body    = $request->message . '<br> Phone: ' . $request->phone . '<br> Email: ' . $request->email;
            // $mail->AltBody = plain text version of email body;
            $mail->send();
 
        } catch (Exception $e) {
            //  dd($e);
        }


        Toastr::success('Message sent successfully', 'Success');
        return redirect()->back();
    }

    public function maintenance(){
        return view('frontend.maintenance');
    }


    public function contact()
    {
        $data['contact']=ContactPage::first();
        
        return view('frontend.contact',$data);
        
    }

    public function page($slug){
        $page = Page::where('slug', $slug)->first();
        return view('frontend.page', compact('page'));
    }
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $contact_message = new ContactMessage();
        
        $contact_message->name = $request->name;
        $contact_message->email = $request->email;
        $contact_message->subject = $request->subject;
        $contact_message->phone = $request->phone;
        $contact_message->message = $request->message;
        $contact_message->created_at = now();
        $contact_message->save();
        Toastr::success('Message sent successfully', 'Success');
        return redirect()->back();
    }

    public function about()
    {
        $about= About::first();
        return view('frontend.about',compact('about'));
    }

    public function subscribe(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
           Toastr::error('Please enter a valid email address', 'Error');
           return back();
        }
        $subscriber =Subscriber::where('email',$request->email)->first();
        if(!empty($subscriber)){
            Toastr::error('You are already subscribed', 'Error');
            return back();
           
        }else{
            $data  = new Subscriber();
            $input = $request->all();
            $data->fill($input)->save();
            Toastr::success('You have subscribed successfully', 'Success');
            return back();
        }
    }

    // service
    public function service()
    {
        $categories = ServiceCategory::orderBy('id','DESC')->get();
        $cities = Country::all();
        return view('frontend.service.post', compact('categories', 'cities'));
    }

    public function servicePost(Request $request)
    {
        
        $this->storeData($request, new Service());

        Toastr::success('New Job has been created', 'Success');
        return back();
        
    }

    public function serviceEdit(Service $service)
    {
        $servicescategory = ServiceCategory::where('status', 1)->get();
        return view('user.service.edit', compact('service', 'servicescategory'));
    }

    public function serviceUpdate(Request $request, $id)
    {
        $service = Service::findOrFail($id);
       $check= $this->storeData($request, $service, $service->id);
       if($check == 'success'){
        Toastr::success('Service has been updated', 'Success');
         }else{
           foreach($check as $error){
               Toastr::error($error, 'Error');
           }
        
    }
    return back();  
}

    public function browseAllServices(Request $request){
        $services = Service::orderBy('id','DESC')
        ->when($request->category, function($query, $category){
            return $query->where('category_id', $category);
        })
        ->when($request->region, function($query, $region){
            return $query->where('region', $region);
        })
        ->when($request->postcode, function($query, $postcode){
            return $query->where('postcode', $postcode);
        })
        
        ->paginate(12);
        return view('frontend.service.browse', compact('services'));
    }

    public function serviceDetails($id){

        $service = Service::findOrFail($id);
        
        $user = [];
        foreach($service->usercontacts as $contact){
            $user[] = $contact->user;
        }

        // return view('frontend.service.details', compact('service'));
        return view('frontend.service.details', compact('service', 'user'));
    }

    public function storeData($request, $data, $id = null)
    {

       

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|unique:services,title,' . $id,
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'photo.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'city_id' => 'required|integer',
            'town_id' => 'required|integer',
            'postcode' => 'required|string',
            'start_date' => 'required|date|after:today',
        ]);
       


        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                Toastr::error($error, 'Error');
               
            }
           
        }


        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->category_id = $request->category_id;
        $data->description = $request->description;
        $data->budget = $request->budget ? $request->budget : 0.00;
        $data->user_id = auth()->user()->id;
        $data->city_id = $request->city_id;
        $data->town_id = $request->town_id;
        $data->postcode = $request->postcode;
        $data->start_date = $request->start_date;

        // multiple image upload 
        if($request->hasFile('photo')){
            
            $images = $request->file('photo');
            $imageArray = array();
            foreach($images as $image){
                $image_name =Str::random(6). time().'.'.$image->getClientOriginalExtension();
                $image->move('assets/images/advertisement',$image_name);
                $imageArray[] = $image_name;
            }
            $data->photo = implode(',',$imageArray);
           
        }
    
       
        $data->save();
        return 'success';
    }


    public function userDetails($id){
        $user = User::findOrFail($id);

        $advert = Advertisement::where('user_id', $user->id)->get();
        $services = Service::where('user_id', $user->id)->get();
        return view('frontend.userDetails', compact('user', 'advert', 'services'));

    }

    public function landlordDetails(){
        return view('frontend.landlordDetails');
    }

    public function tenantDetails(){
        return view('frontend.tenantDetails');
    }

    public function jobDetails(){
        return view('frontend.jobDetails');
    }

    public function blog(Request $request){
        $search = $request->search;
        if($search){
            $blogs = Blog::where('title', 'LIKE', '%'.$search.'%')->orderBy('id','DESC')->paginate(12);
        }
        else{
        $blogs = Blog::orderBy('id','DESC')->paginate(12);
        }
        $blogcategory = BlogCategory::where('status', 1)->get();
        return view('frontend.blog', compact('blogs', 'blogcategory'));
    }
    public function blogCategory($id){
        $blogs = Blog::where('category_id', $id)->orderBy('id','DESC')->paginate(12);
        $blogcategory = BlogCategory::where('status', 1)->get();
        return view('frontend.blog', compact('blogs', 'blogcategory'));
    }

    public function blogDetails($id){
        $blog = Blog::findOrFail($id);
        $trendings = Blog::orderBy('views', 'DESC')->take(6)->get();
        $blogcategory = BlogCategory::where('status', 1)->get();
        return view('frontend.blogDetails', compact('blog', 'trendings', 'blogcategory'));
    }
}
