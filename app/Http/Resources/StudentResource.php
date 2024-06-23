<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ClassResource;
use App\Http\Resources\SectionResource;

class StudentResource extends JsonResource
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
            'email' => $this->email,
            'class_id' => $this->class_id,
            'section_id' => $this->section_id,
            'class' => ClassResource::make($this->class),
            'section' => SectionResource::make($this->section),
            'created_at_formatted' => $this->created_at->format('m-d-Y'),
            'updated_at_formatted' => $this->updated_at->format('m-d-Y'),
        ];
    }
}
