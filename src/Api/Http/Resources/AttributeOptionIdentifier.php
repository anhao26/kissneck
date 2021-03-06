<?php

namespace Kissneck\Api\Http\Resources;

use ApiHelper\Http\Resources\Json\Resource;

class AttributeOptionIdentifier extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'          => 'attribute_options',
            'id'            => (string) $this->getKey(),
        ];
    }
}
