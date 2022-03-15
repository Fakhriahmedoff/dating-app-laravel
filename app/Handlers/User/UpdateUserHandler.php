<?php

namespace App\Handlers\User;

use App\Commands\User\UpdateUserCommand;

class UpdateUserHandler extends AbstractUserHandler
{
    public function handle(UpdateUserCommand $command)
    {
        $user = $command->getUser();
        dd($user);
    }
}
