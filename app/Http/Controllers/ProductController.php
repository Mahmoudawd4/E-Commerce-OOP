<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //

    public function allProduct()
    {
        $Products=Product::get();

        return view('allproduct',[
            'Products'=>$Products ,
        ]);
    }

    public function showProduct()
    {
        $showProd=Product::where('price','>=','100')->get();

        return view('showproduct',[
            'Products'=>$showProd ,
        ]);
    }
    
}
