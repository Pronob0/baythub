<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InvestController extends Controller
{
    public function create()
    {
        $cities = Country::all();
        return view('frontend.invest.create',compact('cities'));
    }

    public function store(Request $request){

        

        $request->validate([
            
            'name' => 'required|string|max:255',
            'loation' => 'required|string|max:255', // Note: the field name should be 'location' instead of 'loation'
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


            // Add validation rules for other bed sizes and prices as needed
        ]);

        $bedSizes = [
            'onebed' => $request->input('1bed_size'),
            'twobed' => $request->input('2bed_size'),
            'threebed' => $request->input('3bed_size'),
            'fourbed'=> $request->input('4bed_size'),
            'fivebed' => $request->input('5bed_size'),
            'sixbed' => $request->input('6bed_size'),
            'sevenbed' => $request->input('7bed_size'),
            // Add other bed sizes as needed
        ];

        $bedPrices = [
            'onebed' => $request->input('1bed_price'),
            'twobed' => $request->input('2bed_price'),
            'threebed' => $request->input('3bed_price'),
            'fourbed' => $request->input('4bed_price'),
            'fivebed' => $request->input('5bed_price'),
            'sixbed' => $request->input('6bed_price'),
            'sevenbed' => $request->input('7bed_price'),
            // Add other bed prices as needed
        ];
        if($request->hasFile('photo')){
            $images = $request->file('photo');
            $imageArray = array();
            foreach($images as $image){
                $image_name =Str::random(6). time().'.'.$image->getClientOriginalExtension();
                $image->move('assets/images/advertisement',$image_name);
                $imageArray[] = $image_name;
            }
            $newphoto = implode(',',$imageArray);
           
        }

        // Create a new investment post
        $investment = new Investment([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'location' => $request->loation,
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
            'photo'=>$newphoto,
            
        ]);

        

        $investment->save();

        return redirect()->back()->with('message','Advertisement created successfully');

    }

    public function browsall(){
        $items = Investment::orderBy('id','desc')->paginate(12);
        $cities = Country::get();
        return view('frontend.investments',compact('items','cities'));

    }

    public function editInvest($id){
        $item = Investment::findOrFail($id);
        $cities = Country::get();
        return view('user.investment.edit',compact('item','cities'));
    }


}
