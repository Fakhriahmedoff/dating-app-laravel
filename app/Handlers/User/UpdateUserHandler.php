<?php

namespace App\Handlers\User;

use App\Commands\User\UpdateUserCommand;

class UpdateUserHandler extends AbstractUserHandler
{
    /**
     * @param UpdateUserCommand $command
     */
    public function handle(UpdateUserCommand $command)
    {
        $user = $command->getUser();
        $user->setName($command->name)
            ->setAge($command->age)
            ->setGender($command->gender)
            ->setProfession($command->profession)
            ->setLocation($command->location)
            ->setAbout($command->about)
            ->setCover($command->cover)
            ->setLng($command->lng)
            ->setLtd($command->ltd)
            ->save();
        dd($user);
    }
}
