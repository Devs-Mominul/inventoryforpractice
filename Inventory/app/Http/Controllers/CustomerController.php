<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function customer(){
        return view('customer.customer');
    }
    function customer_store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
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
        $photo->move(public_path('upload/customer'),$file_name);
        Customer::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'shop_name'=>$request->shop_name,
            'photo'=>$file_name,
            'account_holder'=>$request->account_holder,
            'account_number'=>$request->account_number,
            'bank_name'=>$request->bank_name,
            'bank_branch'=>$request->bank_name,
            'city'=>$request->city,
        ]);
        return back()->with('success','Customer Added Successfully');

    }
    function customer_all(){
        $all_customer=Customer::all();
        return view('customer.all_customer',[
            'all_customer'=>$all_customer,
        ]);
    }
}
