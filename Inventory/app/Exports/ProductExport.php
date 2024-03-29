<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select(
            'product_name',
            'category_id',
            'supplier_id',
            'product_code',


            'product_garage',
            'product_route',
            'photo',
            'buying_date',
            'expire_date',
            'buying_price',
            'selling_price',
        )->get();
    }

}
