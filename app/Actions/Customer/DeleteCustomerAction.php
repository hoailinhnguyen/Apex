<?php

namespace App\Actions\Customer;


use App\Repositories\Customer\CustomerRepository;
use App\Supports\Traits\HasTransformer;
use Illuminate\Http\JsonResponse;
use League\Flysystem\Exception;

/**
 * Class
 * @package App\Actions\User
 */
class DeleteCustomerAction
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
     * @param $id
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke($id): JsonResponse
    {
        try {
            $this->customerRepository->delete($id);
            return $this->httpNoContent();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
