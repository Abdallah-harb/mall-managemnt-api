<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VendorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "department_id" => $this->department_id,
            "name" => $this->name,
            "phone" => $this->phone,
            "description" => $this->description,
            "logo" => asset($this->logo),
            "department" =>new DepartmentResource($this->whenLoaded('department'))
        ];
    }
}
