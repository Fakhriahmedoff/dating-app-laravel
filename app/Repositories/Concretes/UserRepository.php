<?php


namespace App\Repositories\Concretes;

use App\Repositories\Abstracts\AbstractUserRepository;
use Illuminate\Support\Collection;

class UserRepository implements AbstractUserRepository
{


    public function getUsersNearby($user): Collection
    {
        return $user;
    }

    public function getUserDetails($user_id): Collection
    {
        $data = $this->model::findOrFail($user_id);
    }


}
