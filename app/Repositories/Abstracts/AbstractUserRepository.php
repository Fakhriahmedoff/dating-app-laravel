<?php


namespace App\Repositories\Abstracts;

use Illuminate\Support\Collection;

interface AbstractUserRepository
{
    public function getUserDetails($user_id): Collection;

    public function getUsersNearby($user): Collection;


}
