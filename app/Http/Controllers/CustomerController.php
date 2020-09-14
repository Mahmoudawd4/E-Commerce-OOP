<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function allCustomer()
    {
        $Customer=Customer::get();
        //dd($Customer);
        return view('allCustomer',[
            'customers'=>$Customer,
        ]);
    }


    public function showCustomer()
    {
        $showCustomer=Customer::where('customerCity','=','cairo')->get();
        return view('showcustomer',[
            'customers'=> $showCustomer,
        ]);
    }
    
}
