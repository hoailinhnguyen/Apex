<?php

namespace App\Actions\User;

use App\Supports\Traits\HasTransformer;
use App\Transformers\UserTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class ShowDetailUserAction
{
    use HasTransformer;

    /**
     * @param $user
     * @return JsonResponse
     */
    public function __invoke($user): JsonResponse
    {
        return $this->httpOK($user, UserTransformer::class);
    }
}
