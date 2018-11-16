<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Transformers\UserTransformer;

class UserController extends Controller {


    /**
     *
     * @SWG\Post(
     *     path="/v1/user/",
     *     tags={"user"},
     *     summary="Register user.",
     *
     *      @SWG\Parameter(
     *         name="Body Contents",
     *         in="body",
     *         description="",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/UserRegisterSwagger")
     *      ),
     *
     *     @SWG\Response(
     *         response=200,
     *         description="",
     *     )
     * )
     */
    public function createUser(RegisterUserRequest $request){
        $user = User::create($request->all());
        return fractal()
            ->item($user, new UserTransformer())
            ->respond(200);
    }

}
