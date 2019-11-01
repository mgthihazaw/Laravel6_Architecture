<?php

namespace App\Repositories;

use App\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all()
    {
        // $customers = Customer::orderBy('name')
        //     ->where('active', 1)
        //     ->with('user')
        //     ->get()
        //     ->map(function ($customer) {
        //         return [
        //             'id' => $customer->id,
        //             'name' => $customer->name,
        //             'created_by' => $customer->user->email,
        //             'created_at' => $customer->created_at,

        //         ];
        //     });
        $customers = Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map->format();
        return $customers;
    }

    public function showBy($id)
    {
        $customer = Customer::where('id', $id)->where('active', 1)->firstOrFail();
        return $customer->format();
    }
    public function update($id)
    {
        $customer = Customer::where('id', $id)->where('active', 1)->firstOrFail();
        $customer = $customer->update(request()->only('name'));
    }
}