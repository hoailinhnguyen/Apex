<?php

namespace App\Http\Controllers\User;

use App\Actions\User\CreateUserAction;
use App\Actions\User\DeleteUserAction;
use App\Actions\User\ShowDetailUserAction;
use App\Actions\User\ShowListUserAction;
use App\Actions\User\UpdateUserAction;
use App\Filters\UserFilter;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Sorts\UserSort;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param  $filter
     * @param  $sort
     * @param  $action
     * @return JsonResponse
     */
    public function index(Request $request, UserFilter $filter,
                          UserSort $sort,
                          ShowListUserAction $action): JsonResponse
    {
        return ($action)($filter, $sort, $request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     * @param  $action
     * @return JsonResponse
     */
    public function store(CreateUserRequest $request, CreateUserAction $action): JsonResponse
    {
        return ($action)($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     * @param  ShowDetailUserAction  $action
     * @return JsonResponse
     */
    public function show(User $user, ShowDetailUserAction $action): JsonResponse
    {
        return ($action)($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest  $request
     * @param  User  $user
     * @param  UpdateUserAction  $action
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function update(UpdateUserRequest $request, User $user, UpdateUserAction $action): JsonResponse
    {
        return ($action)($request->all(), $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @param  DeleteUserAction  $action
     * @return JsonResponse
     */
    public function destroy(User $user, DeleteUserAction $action): JsonResponse
    {
        return ($action)($user);
    }
}
