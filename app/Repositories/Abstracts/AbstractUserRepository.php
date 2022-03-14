<?php


namespace App\Repositories\Abstracts;

use Illuminate\Support\Collection;

interface AbstractUserRepository
{
    public function getUserDetails($user_id);

    public function getUsersNearby($user);


}
