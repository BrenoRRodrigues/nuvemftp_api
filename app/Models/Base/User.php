<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 14:38:49 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $groups
 *
 * @package App\Models\Base
 */
class User extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $dates = [
		'email_verified_at'
	];

	public function groups()
	{
		return $this->belongsToMany(\App\Models\Group::class, 'users_of_groups')
					->withPivot('id');
	}
}
