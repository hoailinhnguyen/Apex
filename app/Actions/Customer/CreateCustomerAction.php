<?php

namespace App\Actions\Customer;

use App\Models\User;
use App\Repositories\Customer\CustomerRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Customer\CustomerTransformer;
use App\Transformers\UserTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class CreateCustomerAction
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
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data): JsonResponse
    {
        $response = $this->customerRepository->create($data);

        return $this->httpCreated($response, CustomerTransformer::class);
    }
}
