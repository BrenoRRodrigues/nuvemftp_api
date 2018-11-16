<?php

namespace App\Models;

class Medium extends \App\Models\Base\Medium
{
	protected $fillable = [
		'disk',
		'directory',
		'filename',
		'extension',
		'mime_type',
		'aggregate_type',
		'size'
	];
}
