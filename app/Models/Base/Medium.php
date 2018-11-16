<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 14:38:49 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Medium
 * 
 * @property int $id
 * @property string $disk
 * @property string $directory
 * @property string $filename
 * @property string $extension
 * @property string $mime_type
 * @property string $aggregate_type
 * @property int $size
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $mediables
 *
 * @package App\Models\Base
 */
class Medium extends Eloquent
{
	protected $casts = [
		'size' => 'int'
	];

	public function mediables()
	{
		return $this->hasMany(\App\Models\Mediable::class, 'media_id');
	}
}
