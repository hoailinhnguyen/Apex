<?php

namespace App\Actions\User;

use App\Models\User;
use App\Supports\Traits\HasTransformer;
use App\Transformers\UserTransformer;
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
     * @param array $data
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data): JsonResponse
    {
        $response = User::create($data);

        return $this->httpCreated($response, UserTransformer::class);
    }
}
