<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Main;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    function index(){
        if (Auth::user()->type==1){

            $con=Contract::where("user_id",Auth::user()->id)->where("confirmed","0")->count();
            $main=Main::all()->count();
            $on=Payment::where("user_id",Auth::user()->id)->where("state","paid")->count();
            $late=Payment::where("user_id",Auth::user()->id)->where("state","late")->count();

            return view("index",compact("con","main",'on','late'));
        }else{
            return redirect("/payment");
        }

    }
}
