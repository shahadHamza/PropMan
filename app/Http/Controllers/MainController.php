<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        if(Auth::user()->type==0) {
            $main = Main::where("user_id", Auth::user()->id)->get();
        }
        else{
            $main = Main::where("owner", Auth::user()->email)->get();
        }
        return view("maintenance.maintenance",compact("main"));
    }


    public function create()
    {
        return view("maintenance.addMain");
    }

    public function store(Request $request)
    {
        Main::create([
            'owner'=>$request->email,
            'type'=>$request->type,
            'user_id'=>(Auth::user()->id),
        ]);

        session()->flash("add","maintenance request added successfully");
        return redirect("/payment");
    }

    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(Main $main)
    {
        //
    }

    public function update(Request $request, int $id)
    {
        $con=Main::find($id)->first();

        $con->state=$request->state;
        $con->save();
        return redirect("/maintenance");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main $main)
    {
        //
    }
}
