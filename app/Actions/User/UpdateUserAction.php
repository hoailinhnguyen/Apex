<?php

namespace App\Actions\User;

use App\Repositories\Users\UserRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Users\UserTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @package App\Actions\User
 */
class UpdateUserAction
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
     * @param $id
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data, $id): JsonResponse
    {
        $response = $this->userRepository->update($data, $id);
        return $this->httpOk($response, UserTransformer::class);
    }
}
