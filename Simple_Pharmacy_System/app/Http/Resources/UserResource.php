<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'national_id' => $this->national_id,
            'email' => $this->email,
            'gender' =>  $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'phone' => $this->phone,
            'password' =>  $this->password,
            'image' => $this->image
        ];
    }
}
