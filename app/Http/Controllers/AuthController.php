<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginSiteRequest;
use App\Transformers\UserTransformer;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;

class AuthController extends Controller {

    /**
     * Return Json Web Token of password informed by email and password
     *
     * @SWG\Post(
     *     path="/v1/auth",
     *     tags={"auth"},
     *     summary="Login.",
     *
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/LoginSiteSwagger")
     *     ),
     *
     *     @SWG\Response(
     *         response=200,
     *         description="",
     *     )
     * )
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginSiteRequest $request) {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


    /**
     *
     * Refresh token.
     *
     * Caso a mensagem "The token has been blacklisted" seja exibida, significa que o token enviado já foi utilizado
     * e um refresh posterior ao seu uso já foi realizado ou seja, este token já foi atualizado e agora não pode mais
     * ser usado pois foi incluído em uma lista negra (que eu não sei exatamente onde fica).
     *
     * Caso a mensagem seja Unauthenticated, significa que o token pode ser inválido ou estar expirado.
     *
     *
     * @SWG\Put(
     *     path="/v1/user/auth",
     *     tags={"auth"},
     *     summary="Refresh token",
     *
     *     security={
     *         {
     *             "default": {}
     *         }
     *     },
     *
     *     @SWG\Response(
     *         response=200,
     *         description="",
     *     )
     * )
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refreshToken(){
        try{
            return $this->respondWithToken(auth()->refresh());
        }catch(TokenBlacklistedException $e){
            return response()->json($e->getMessage(), 401);
        }
    }


    /**
     *
     * @SWG\Delete(
     *     path="/v1/user/auth",
     *     tags={"auth"},
     *     summary="Logout.",
     *
     *     security={
     *         {
     *             "default": {}
     *         }
     *     },
     *
     *     @SWG\Response(
     *         response=200,
     *         description="",
     *     )
     * )
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(){
        auth()->logout();
        return response()->json(['message' => 'Logged Out']);
    }


    /**
     *
     * @SWG\Get(
     *     path="/v1/user/auth",
     *     tags={"auth"},
     *     summary="Get Logged User",
     *
     *     security={
     *         {
     *             "default": {}
     *         }
     *     },
     *
     *     @SWG\Response(
     *         response=200,
     *         description="",
     *     )
     * )
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserLogged(){
        return fractal()
            ->item(auth()->user(), new UserTransformer())
            ->respond(200);
    }


    /**
     * @param String $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken(String $token) {
        return response()->json($this->buildToken($token));
    }

    /**
     * @param String $token
     * @return array
     */
    protected function buildToken(String $token) {
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ];
    }


}
