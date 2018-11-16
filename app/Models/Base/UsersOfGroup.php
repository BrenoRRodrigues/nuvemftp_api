<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 14:38:49 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UsersOfGroup
 * 
 * @property int $id
 * @property int $user_id
 * @property int $group_id
 * 
 * @property \App\Models\Group $group
 * @property \App\Models\User $user
 *
 * @package App\Models\Base
 */
class UsersOfGroup extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'group_id' => 'int'
	];

	public function group()
	{
		return $this->belongsTo(\App\Models\Group::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
