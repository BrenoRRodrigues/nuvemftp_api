<?php
/**
 * Created by PhpStorm.
 * User: br3eno
 * Date: 16/11/18
 * Time: 17:08
 */

namespace App\Swagger\User;

/**
 * @SWG\Definition(required={}, type="object")
 */
class LoginSiteSwagger {
    /**
     * @var string
     * @SWG\Property(example="br3eno14@gmail.com")
     */
    public $email;

    /**
     * @var string
     * @SWG\Property(example="breno123")
     */
    public $password;
}
