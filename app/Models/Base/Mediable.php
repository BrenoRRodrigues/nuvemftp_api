<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 14:38:49 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mediable
 * 
 * @property int $media_id
 * @property string $mediable_type
 * @property int $mediable_id
 * @property string $tag
 * @property int $order
 * 
 * @property \App\Models\Medium $medium
 *
 * @package App\Models\Base
 */
class Mediable extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'media_id' => 'int',
		'mediable_id' => 'int',
		'order' => 'int'
	];

	public function medium()
	{
		return $this->belongsTo(\App\Models\Medium::class, 'media_id');
	}
}
