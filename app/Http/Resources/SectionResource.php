<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ClassResource;

class SectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'class_id' => $this->class_id,
            'class' => ClassResource::make($this->class),
            'created_at_formatted' => $this->created_at->format('m-d-Y'),
            'updated_at_formatted' => $this->updated_at->format('m-d-Y'),
        ];
    }
}
