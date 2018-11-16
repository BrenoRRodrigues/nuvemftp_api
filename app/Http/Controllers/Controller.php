<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * @SWG\Swagger(
     *     schemes={"http","https"},
     *     basePath="/",
     *     @SWG\Info(
     *         version="0.0.1",
     *         title="nuvemFTP",
     *         description="nuvemFTP web API",
     *         @SWG\Contact(
     *             email="br3eno14@gmail.com"
     *         )
     *     )
     * )
     */

    /**
     * @SWG\SecurityScheme(
     *   securityDefinition="default",
     *   type="apiKey",
     *   in="header",
     *   name="Authorization",
     *   description="Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvY29tbW9uXC9hdXRoXC9sb2dpbiIsImlhdCI6MTUzODI0MTY0MywiZXhwIjoxNTM4MjQ1MjQzLCJuYmYiOjE1MzgyNDE2NDMsImp0aSI6IndvRndtTTFXVGNrcXdhVTEiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.gQ55H8189aMiNL_tzUO5OlixFUIuxLz7agwFiUFuXqc"
     * )
     */

}
