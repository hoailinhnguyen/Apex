<?php

namespace App\Actions\User;


use App\Supports\Traits\HasTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class DeleteUserAction
{
    use HasTransformer;

    /**
     * @param $user
     * @return JsonResponse
     */
    public function __invoke($user): JsonResponse
    {
        $user->delete();
        return $this->httpNoContent();
    }
}
