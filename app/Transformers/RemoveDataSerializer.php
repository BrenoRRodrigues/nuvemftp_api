<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 04/05/18
 * Time: 22:41
 */

namespace App\Transformers;

use League\Fractal\Serializer\ArraySerializer;

class RemoveDataSerializer extends ArraySerializer
{
    public function collection($resourceKey, array $data)
    {
        if ($resourceKey) {
            return [$resourceKey => $data];
        }

        return $data;
    }

    public function item($resourceKey, array $data)
    {
        if ($resourceKey) {
            return [$resourceKey => $data];
        }
        return $data;
    }
}
