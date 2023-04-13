<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Registrationcontroller extends Controller
{
    
    public function index()
    {
         
        $customers = Customer::all();
        $data = compact('customers');
        return view('form')->with($data);
        // return view('form');
    }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|unique:customers|min:10|max:10',
            'email' => 'required|email|unique:customers',
            'service' => 'required'
            
            // 'password' => 'required|alpha_num',
            // 'cpassword' => 'required|same:password'
         ]);
      
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->mobile = $request['mobile'];
        $customer->email = $request['email'];
        $customer->service = $request['service'];

        $customer->save();
        return redirect('/customer/view');
    }
    public function view()
    {
        $customers = Customer::all();
       
        $data = compact('customers');
        
        return view('form')->with($data);

    }
    public function edit($id)
    {
        // echo $id;
       $customer = Customer::find($id);
       if(is_null($customer)){
        // not found
        return redirect('/customer/view');
    
       }
       else{
        // found
        // $url = url('/customer/update') . "/" . $id;

        $data = compact('customer');
        return view('edit')->with($data);

       }

    }





    public function destroy($id)
    { 
        echo $id;
        $c = Customer::find($id);
        if(!is_null($c))
        {
            // delete operation
            $c->delete();
            

        return redirect('/customer/view');

        }
       else{
        return redirect('/customer/view');
        
       }

        // return redirect('form')->with(($data));

        
    }

    public function update($id , Request $request)
    {
        // echo $id;
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->mobile = $request['mobile'];
        $customer->email = $request['email'];
        $customer->service = $request['service'];
        $customer->save();
        return redirect('/customer/view');
        



    }

  


}