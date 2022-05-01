<?php

namespace App\Actions\Customer;

use App\Repositories\Customer\CustomerRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\UserTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class ShowDetailCustomerAction
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
     * @param $user
     * @return JsonResponse
     */
    public function __invoke($id): JsonResponse
    {
        $customer = $this->customerRepository->find($id);
        return $this->httpOK($customer, UserTransformer::class);
    }
}
