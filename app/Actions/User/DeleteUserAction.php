<?php

namespace App\Actions\User;


use App\Repositories\Users\UserRepository;
use App\Supports\Traits\HasTransformer;
use Illuminate\Http\JsonResponse;
use League\Flysystem\Exception;

/**
 * Class
 * @package App\Actions\User
 */
class DeleteUserAction
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
     * @throws \Exception
     */
    public function __invoke($id): JsonResponse
    {
        try {
            $this->userRepository->delete($id);
            return $this->httpNoContent();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
