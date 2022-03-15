<?php

namespace App\Handlers\User;

use App\Commands\User\CreateUserCommand;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserHandler extends AbstractUserHandler
{
    public function handle(CreateUserCommand $command)
    {

        $user = User::create([
            'name' => $command->name,
            'email' => $command->email,
            'password' => Hash::make($command->password),
            'age' => $command->age,
            'gender' => $command->gender,
            'profession' => $command->profession,
            'location' => $command->location,
            'about' => $command->about,
            'cover' => $command->cover,
            'lng' => $command->lng,
            'ltd' => $command->ltd,
        ]);
        $command->setUser($user);

    }
}
