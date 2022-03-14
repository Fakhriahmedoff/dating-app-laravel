<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     *  @property string|null $password
     * @property string|null $name
     * @property int|null $age
     * @property string|null $gender
     * @property string|null $profession
     * @property string|null $location
     * @property string|null $about
     * @property string|null $cover
     * @property string|null $lng
     * @property string|null $ltd
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     */

    public function toArray($request) : Array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->profession,
            'location' => $this->location,
            'about' => $this->about,
            'cover' => $this->cover,
            'lng' => $this->lng,
            'ltd' => $this->ltd,
        ];
    }
}
