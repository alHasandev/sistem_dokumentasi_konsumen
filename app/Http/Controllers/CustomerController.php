<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        return view('create_customer');
    }

    public function create_post()
    {
        $customer = new Customer();

        $customer->name = request("name");
        $customer->email = request("email");
        $customer->occupation = request("occupation");
        $customer->save();

        return redirect('get-customer');
    }

    public function get()
    {
        $all_customer = Customer::all();

        return view('all_customer', ['all_customer' => $all_customer]);
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('edit_customer', ['customer' => $customer]);
    }

    public function update(Request $request)
    {
        $customer = Customer::find($request['id']);

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->occupation = $request['occupation'];
        $customer->save();

        return redirect('/get-customer');
    }

    public function delete($id)
    {
        $all_customer = Customer::all();

        $customer = Customer::find($id);

        $customer->delete();

        return redirect('/get-customer');
    }
}
