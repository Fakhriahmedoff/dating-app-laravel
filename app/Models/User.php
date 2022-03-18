<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'gender',
        'profession',
        'location',
        'about',
        'cover',
        'lng',
        'ltd',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->attributes['name'];
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->attributes['age'];
    }

    /**
     * @param $age
     * @return $this
     */
    public function setAge($age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->attributes['gender'];
    }

    /**
     * @param $gender
     * @return $this
     */
    public function setGender($gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfession(): string
    {
        return $this->attributes['profession'];
    }

    /**
     * @param $profession
     * @return $this
     */
    public function setProfession($profession): self
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->attributes['location'];
    }

    /**
     * @param $location
     * @return $this
     */
    public function setLocation($location): self
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbout(): string
    {
        return $this->attributes['about'];
    }

    /**
     * @param $about
     * @return $this
     */
    public function setAbout($about): self
    {
        $this->about = $about;
        return $this;
    }

    /**
     * @return string
     */
    public function getCover(): string
    {
        return $this->attributes['cover'];
    }

    /**
     * @param $cover
     * @return $this
     */
    public function setCover($cover): self
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @return string
     */
    public function getLng(): string
    {
        return $this->lng;
    }

    /**
     * @param $lng
     * @return $this
     */
    public function setLng($lng): self
    {
        $this->lng = $lng;
        return $this;
    }

    /**
     * @return string
     */
    public function getLtd(): string
    {
        return $this->lng;
    }

    /**
     * @param $ltd
     * @return $this
     */
    public function setLtd($ltd): self
    {
        $this->ltd = $ltd;
        return $this;
    }
}
