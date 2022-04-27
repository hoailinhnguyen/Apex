<?php

namespace App\Http\Controllers\Customer;

use App\Actions\Customer\CreateCustomerAction;
use App\Actions\Customer\DeleteCustomerAction;
use App\Actions\Customer\ShowDetailCustomerAction;
use App\Actions\Customer\ShowListCustomerAction;
use App\Actions\Customer\UpdateCustomerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CreateCustomerRequest;
use App\Http\Requests\Customer\UpdateCustomerRequest;
use App\Models\Customer;
use Exception;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

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
     * @param CreateCustomerRequest $request
     * @param CreateCustomerAction $action
     * @return JsonResponse|SuccessResponseBuilder
     */
    public function store(CreateCustomerRequest $request, CreateCustomerAction $action)
    {
        return ($action)($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Customer $customer
     * @param ShowDetailCustomerAction $action
     * @return JsonResponse
     */
    public function show(Customer $customer, ShowDetailCustomerAction $action): JsonResponse
    {
        return ($action)($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerRequest $request
     * @param Customer $customer
     * @param UpdateCustomerAction $action
     * @return JsonResponse|SuccessResponseBuilder
     */
    public function update(UpdateCustomerRequest $request, Customer $customer, UpdateCustomerAction $action)
    {
        return ($action)($request->all(), $customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $customer
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Customer $customer, DeleteCustomerAction $action): JsonResponse
    {
        return ($action)($customer);
    }
}
