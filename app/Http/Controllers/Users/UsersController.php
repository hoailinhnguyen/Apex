<?php

namespace App\Http\Controllers\Users;

use App\Actions\User\CreateUserAction;
use App\Actions\User\DeleteUserAction;
use App\Actions\User\ShowDetailUserAction;
use App\Actions\User\ShowListUserAction;
use App\Actions\User\UpdateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Users\UserCreateRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers\Users;
 */
class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  ShowListUserAction  $action
     * @return JsonResponse
     */
    public function index(ShowListUserAction $action)
    {

        return ($action)();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserCreateRequest  $request
     *
     * @param  CreateUserAction  $action
     * @return SuccessResponseBuilder|JsonResponse|Response
     *
     */
    public function store(UserCreateRequest $request, CreateUserAction $action)
    {
            return ($action)($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param    $id
     *
     * @param  ShowDetailUserAction  $action
     * @return JsonResponse
     */
    public function show($id, ShowDetailUserAction $action)
    {
        return ($action)($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  UserUpdateRequest  $request
     * @param  int  $id
     *
     * @param  UpdateUserAction  $action
     * @return SuccessResponseBuilder|JsonResponse|Response
     */
    public function update(UserUpdateRequest $request, int $id, UpdateUserAction $action)
    {
            return ($action)($request->all(),$id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @param  DeleteUserAction  $action
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(int $id, DeleteUserAction $action)
    {
        return ($action)($id);
    }
}
