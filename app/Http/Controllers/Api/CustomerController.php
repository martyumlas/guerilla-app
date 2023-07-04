<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Capability;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(CustomerRequest $request)
    {

        $customerData = $request->only('first_name', 'last_name');

        $addresses = $request->only('address');

        $customer = Customer::create($customerData);


        foreach($addresses['address'] as $address)
        {
            $customer->addresses()->create($address);
        }


        $customer->capabilities()->attach(1);

        return $customer->load('addresses');
    }

    public function show(Customer $customer)
    {
        return $customer->load('addresses', 'capabilities');
    }
}
