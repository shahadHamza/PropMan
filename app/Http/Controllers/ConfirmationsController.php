<?php

namespace App\Http\Controllers;

use App\Models\Confirmation;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationsController extends Controller
{

    public function index()
    {
       $con=Contract::where("email",Auth::user()->email)->where("confirmed",'0')->get();


       return view("rent.confirm",compact("con"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $con=Contract::find($request->id)->first();
        $con->delete();
        Contract::create([
            'city'=>$con->city,
            'state_number'=>$con->state_number,
            'type'=>$con->type,
            'prop_number'=>$con->prop_number,
            'postal'=>$con->postal,
            'email'=>$con->email,
            'name'=>$con->name,
            'start'=>$con->start,
            'end'=>$con->end,
            'process'=>$con->process,
            'pdf'=>$con->pdf,
            'confirmed'=>"1",
            'user_id'=>$con->user_id,]
            );

        session()->flash("add","contract added successfully");

        return redirect("/payment");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
