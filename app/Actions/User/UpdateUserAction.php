<?php

namespace App\Actions\User;

use App\Supports\Traits\HasTransformer;
use App\Transformers\UserTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @package App\Actions\User
 */
class UpdateUserAction
{
    use HasTransformer;

    /**
     * @param  array  $data
     * @param $user
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data, $user): JsonResponse
    {
        $user->update($data);

        return $this->httpOk($user, UserTransformer::class);
    }
}
