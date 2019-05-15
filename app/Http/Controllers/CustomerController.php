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

    public function create_post(Request $request)
    {
        $customer = new Customer();

        $customer->name = request("name");
        $customer->email = request("email");
        $customer->occupation = request("occupation");

        return view('view_customer', ['customer' => $customer]);
    }
}
