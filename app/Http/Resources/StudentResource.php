<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
      'registration_num' => $this->registration_num,
      'gender' => $this->gender,
      'address' => $this->address,
      'created_at' => $this->created_at,
      'updated_at' => $this->update_at,
    ];
  }
}