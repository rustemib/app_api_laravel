<?php

namespace App\Http\Resources\ProductProperty;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductPropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'product_id'=>$this->product_id,
            'color1'=>$this->color1,
            'color2'=>$this->color2,
            'brand'=>$this->brand
        ];
    }
}
