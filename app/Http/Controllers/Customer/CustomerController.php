<?php

namespace App\Http\Controllers\Customer;

use App\Actions\Customer\ShowListCustomerAction;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Repositories\Customer\CustomerRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  ShowListCustomerAction  $action
     * @return JsonResponse
     */
    public function index(ShowListCustomerAction $action)
    {
        return ($action)();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
