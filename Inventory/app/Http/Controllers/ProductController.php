<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Supplyer;

use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;

class ProductController extends Controller
{
    function category(){
        $category_all=Category::all();
        return view('product.category',[
            'category_all'=>$category_all,
        ]);
    }
    function category_store(Request $request){
        $request->validate([
            'category_name'=>'required',


        ]);
        Category::insert([
            'category_name'=>$request->category_name,

        ]);
        return back();


    }
    function category_all(){
        $category_all=Category::all();
        return view('product.category_all',[
            'category_all'=>$category_all,
        ]);
    }
    function add_product(){
        return view('product.add_product');
    }
    function store_product(Request $request){
        $request->validate([
            'product_name'=>'required',
            'product_code'=>'required',
            'category_id'=>'required',
            'supplier_id'=>'required',
            'product_garage'=>'required',
            'product_route'=>'required',
            'photo'=>'required',
            'buying_date'=>'required',
            'expire_date'=>'required',
            'buying_price'=>'required',
            'selling_price'=>'required',


        ]);
        $photo=$request->photo;
        $extension=$photo->extension();
        $file_name=time().'.'.$extension;
        $photo->move(public_path('upload/product'),$file_name);
        Product::insert([
            'product_name'=>$request->product_name,
            'product_code'=>$request->product_code,
            'category_id'=>$request->category_id,
            'sup_id'=>$request->supplier_id,
            'product_garage'=>$request->product_garage,
            'product_route'=>$request->product_route,
            'product_image'=>$file_name,
            'buy_date'=>$request->buying_date,
            'expire_date'=>$request->expire_date,
            'buying_price'=>$request->buying_price,
            'selling_price'=>$request->selling_price,



        ]);
    }
    function import_product(){
        return view('product.import_product');
    }
    public function export()
    {
        return Excel::download(new ProductExport, 'users.xlsx');
    }
    public function import(Request $request)
    {
        $request->validate([
            'import_file'=>'required'
        ]);
        return Excel::import(new ProductImport, $request->file('import_file'));
    }
}
