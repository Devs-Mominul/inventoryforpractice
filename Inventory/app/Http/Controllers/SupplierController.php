<?php

namespace App\Http\Controllers;

use App\Models\Supplyer;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    function supplyer(){
        return view('supplyer.supplyer');
    }
    function  supplyer_store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'type'=>'required',
            'shop_name'=>'required',
            'photo'=>'required',
            'account_holder'=>'required',
            'account_number'=>'required',
            'bank_name'=>'required',
            'bank_branch'=>'required',
            'city'=>'required'

        ]);
        $photo=$request->photo;
        $extension=$photo->extension();
        $file_name=time().'.'.$extension;
        $photo->move(public_path('upload/supplier'),$file_name);
       Supplyer::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'type'=>$request->type,
            'shop_name'=>$request->shop_name,
            'photo'=>$file_name,
            'account_holder'=>$request->account_holder,
            'account_number'=>$request->account_number,
            'bank_name'=>$request->bank_name,
            'bank_branch'=>$request->bank_name,
            'city'=>$request->city,
        ]);
        return back()->with('success','Supplier Added Successfully');

    }
}
