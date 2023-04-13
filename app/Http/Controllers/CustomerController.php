<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view('form');

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            // 'mobile' => 'required',
            // 'email' => 'required|email',
            // 'service' => 'required'
            
            // 'password' => 'required|alpha_num',
            // 'cpassword' => 'required|same:password'
        ]);
        echo "<pre>";
        // print_r($errors->all());   usable in blade file
        print_r($request->all());
        echo "</pre>";
       
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->save();
        
    }

}
