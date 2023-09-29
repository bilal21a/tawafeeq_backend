<?php

namespace App\Http\Controllers;

use App\Models\Favlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavlistController extends Controller
{
    public function favlist(Request $request)
    {
        $favlist = new Favlist();
        $favlist->rated_to_id = $request->rated_to_id;
        $favlist->rater_id = auth()->id();
        $favlist->save();
        return "add to fav list";
    }
    public function delete_favlist(Request $request)
    {
        $favlist = Favlist::where('rated_to_id',$request->rated_to_id)->where('rater_id',auth()->id())->first();
        $favlist->delete();
        return "remove from fav list";
    }
}
