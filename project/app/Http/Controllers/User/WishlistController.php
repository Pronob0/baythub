<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function store($id){
        if(auth()->user()){

            $exists = Wishlist::where('user_id', auth()->user()->id)->where('advert_id', $id)->first();
            if($exists){
                return response()->json(['status'=>'error','message' => 'Already in wishlist']);
            }

            $wishlist = new Wishlist();
            $wishlist->user_id = auth()->user()->id;
            $wishlist->advert_id = $id;
            $wishlist->is_job = 0;
            $wishlist->save();

            return response()->json(['status'=>'success','message' => 'Added to wishlist']);


        }
        else{
            return response()->json(['status'=>'error','message' => 'login first']);
        }
    }
}
