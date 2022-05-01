<?php

namespace App\Actions\User;

use App\Models\User;
use App\Supports\Traits\HasTransformer;
use App\Transformers\UserTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class ShowListUserAction
{
    use HasTransformer;

    /**
     * @param $filter
     * @param $sort
     * @param $request
     * @return JsonResponse
     */
    public function __invoke($filter, $sort, $request): JsonResponse
    {
        $response = User::query()
            ->filter($filter)
            ->sortBy($sort)
            ->allowPaginate($request);

        return $this->httpOK($response, UserTransformer::class);
    }
}
