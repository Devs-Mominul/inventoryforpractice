<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    function pos(){
        $product=DB::table('products')->join('categories','products.category_id','categories.id')->select('categories.category_name','products.*')->get();
        $customers=DB::table('customers')->get();
        $categories=DB::table('categories')->get();

        return view('pos.pos',[
            'products'=>$product,
            'customers'=>$customers,
            'categories'=>$categories,
        ]);
    }
}
