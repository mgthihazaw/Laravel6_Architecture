<?php

namespace App\Repositories;

use App\Customer;

class CustomerRepository
{
    public function all()
    {
        $customers = Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map(function ($customer) {
                return [
                    'id' => $customer->id,
                    'name' => $customer->name,
                    'created_by' => $customer->user->email,
                    'created_at' => $customer->created_at,

                ];
            });
        return $customers;
    }
}