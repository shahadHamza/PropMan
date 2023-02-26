<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{

    public function index()
    {
        if(Auth::user()->type==1) {
            $payments = Payment::where("user_id", Auth::user()->id)->get();
        }
        else{
            $payments = Payment::where("rent", Auth::user()->email)->get();
        }
        return view("payments.payment",compact("payments"));
    }


    public function create()
    {
        return view("payments.addpayment");
    }

    public function store(Request $request)
    {

        Payment::create([
            'rent'=>$request->email,
            'price'=>$request->amount,
            'state'=>$request->state,
            'date'=>$request->date,
            'user_id'=>(Auth::user()->id),
        ]);

        session()->flash("add","payment added successfully");
        return redirect("/payment");
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


    public function update(Request $request, int $id)
    {
        //
    }

    public function update_payment(Request $request)
    {
        $con=Payment::findOrFail($request->id)->first();
        if (Carbon::now()<=$con->date && $request->state=="paid"){
            $con->state=$request->state;
        }
        elseif (Carbon::now()>$con->date && $request->state=="paid")  $con->state="late";
        else  $con->state=$request->state;

        $con->save();
        session()->flash("add","payment updated successfully");
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
