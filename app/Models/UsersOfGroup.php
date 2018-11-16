<?php

namespace App\Models;

class UsersOfGroup extends \App\Models\Base\UsersOfGroup
{
	protected $fillable = [
		'user_id',
		'group_id'
	];
}
