<?php

namespace App\Actions\User;

use App\Repositories\Users\UserRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Customer\CustomerTransformer;
use App\Transformers\Users\UserTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class CreateUserAction
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
     * @param array $data
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data): JsonResponse
    {
        $response = $this->userRepository->create($data);

        return $this->httpCreated($response, UserTransformer::class);
    }
}
