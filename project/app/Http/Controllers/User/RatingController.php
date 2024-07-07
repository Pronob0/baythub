<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function ratingStore(Request $request)
    {
        $request->validate([

            'review' => 'required',
        ]);

        if(!auth()->user()){
            return redirect()->back()->with('error', 'You need to login first');
        }

        if($request->owner_id == auth()->user()->id){
            return redirect()->back()->with('error', 'You cannot rate your own profile');
        }
         

        $rating = new Rating();
        $rating->user_id = auth()->user()->id;
        $rating->star_rating = $request->star_rating;
        $rating->review = $request->review;
        $rating->owner_id = $request->owner_id;
        $rating->save();

       Toastr::success('Rating added successfully');
        return redirect()->back();
    }
}
