<?php

namespace App\Models;

class Group extends \App\Models\Base\Group
{
	protected $fillable = [
		'name',
		'user_id'
	];
}
