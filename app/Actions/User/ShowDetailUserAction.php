<?php

namespace App\Actions\User;

use App\Repositories\Users\UserRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Users\UserTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class ShowDetailUserAction
{
    use HasTransformer;

    /**
     * @var
     */
    protected UserRepository $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function __invoke($id): JsonResponse
    {
        $customer = $this->userRepository->find($id);
        return $this->httpOK($customer, UserTransformer::class);
    }
}
