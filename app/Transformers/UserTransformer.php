<?php
/**
 * Created by PhpStorm.
 * User: br3eno
 * Date: 16/11/18
 * Time: 18:38
 */

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract{

    public function transform(User $user){
        return [
            'name'  =>  $user->name,
            'email' =>  $user->email,
            'email_verified'    =>  $user->email_verified_at != null,
        ];
    }

}
