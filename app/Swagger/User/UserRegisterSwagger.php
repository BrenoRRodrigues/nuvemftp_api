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
class UserRegisterSwagger
{

    /**
     * @var string
     * @SWG\Property(example="Breno Ribeiro Rodrigues")
     */
    public $name;


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

    /**
     * @var string
     * @SWG\Property(example="breno123")
     */
    public $password_confirmation;

}
