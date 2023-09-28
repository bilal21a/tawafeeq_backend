<?php

namespace App\Http\Controllers;

use App\Models\Favlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavlistController extends Controller
{
    public function favlist(Request $request) {
    //    $rated_to_id = $request->rated_to_id
       $rated_to_id = '1';
    //    $ratuser_ided_to_id = $request->user_id
       $user_id = '2';
       $user_auth_id = Auth::id();
        $favlist = new Favlist();
        $favlist->rated_to_id = $rated_to_id;
        $favlist->user_id = $user_id;
        $favlist->rater_id = $user_auth_id;
        $favlist->save();
        dd('saved');
    }
    public function delete_favlist($id) {
        $favlist = Favlist::find($id);
        $favlist->delete();
        dd('deleted');
    }
}
