<?php

namespace App\Actions\Customer;

use App\Repositories\Customer\CustomerRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\UserTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @package App\Actions\User
 */
class UpdateCustomerAction
{
    use HasTransformer;

    /**
     * @var CustomerRepository
     */
    protected CustomerRepository $customerRepository;

    /**
     * @param CustomerRepository $customerRepository
     */
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * @param array $data
     * @param $id
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data, $id): JsonResponse
    {
        $customer = $this->customerRepository->update($data, $id);
        return $this->httpOk($customer, UserTransformer::class);
    }
}
