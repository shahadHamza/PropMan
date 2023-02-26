<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContractsController extends Controller
{

    public function index()
    {

        if(Auth::user()->type==1){
            $contracts=Contract::where("user_id",Auth::user()->id)->where("confirmed",'1')->get();
        }else{
            $contracts=Contract::where("email",Auth::user()->email)->where("confirmed","1")->get();
        }

        return view("contract.contract",compact("contracts"));
    }

    public function create()
    {
        $city=DB::table("sa_cities")->get();
        $states=DB::table("sa_provinces")->get();
        return view("contract.addcontract",compact("city",'states'));
    }

    public function store(Request $request)
    {
        $path = $request->file('cont')->store('files','public');
        Contract::create([
            'city'=>$request->city,
            'state_number'=>$request->state_number,
            'type'=>$request->type,
            'prop_number'=>$request->prop_number,
            'postal'=>$request->postal,
            'email'=>$request->email,
            'name'=>$request->name,
            'start'=>$request->start,
            'end'=>$request->end,
            'process'=>$request->process,
            'pdf'=>$path,
            'confirmed'=>'0',
            'user_id'=>(Auth::user()->id),
        ]);

        session()->flash("add","contract added successfully wait user to confirm rent");
        return redirect("/");
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
