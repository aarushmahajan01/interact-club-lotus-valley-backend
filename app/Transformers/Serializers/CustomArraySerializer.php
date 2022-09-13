<?php

namespace App\Transformers\Serializers;

use League\Fractal\Serializer\ArraySerializer;

class CustomArraySerializer extends ArraySerializer
{
    public function collection(?string $resourceKey, array $data):array
    {
        return $resourceKey ? [$resourceKey] : $data;
    }
}
