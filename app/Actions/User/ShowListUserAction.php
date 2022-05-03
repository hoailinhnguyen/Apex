<?php

namespace App\Actions\User;

use App\Repositories\Users\UserRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Users\UserTransformer;
use Illuminate\Http\JsonResponse;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class
 * @package App\Actions\User
 */
class ShowListUserAction
{
    use HasTransformer;

    protected UserRepository $userRepository;

    /**
     * @param  UserRepository  $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * @param $id
     * @return JsonResponse
     */
    public function __invoke()
    {
        $response = $this->userRepository->paginate();

        return $this->httpOK($response, UserTransformer::class);
    }
}
