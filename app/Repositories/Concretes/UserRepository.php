<?php


namespace App\Repositories\Concretes;

use App\Repositories\Abstracts\AbstractUserRepository;

class UserRepository implements AbstractUserRepository
{
    public $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getUserDetails($user_id)
    {
        $data = $this->model::findOrFail($user_id);
    }


}
