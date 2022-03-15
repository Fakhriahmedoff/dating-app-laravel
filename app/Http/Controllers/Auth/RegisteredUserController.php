<?php

namespace App\Http\Controllers\Auth;

use App\CommandBus\CommandBusInterface;
use App\Commands\User\CreateUserCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;

class RegisteredUserController extends Controller
{

    public CommandBusInterface $bus;

    public function __construct(CommandBusInterface $bus)
    {
        $this->bus = $bus;
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        $command = new CreateUserCommand();
        $this->bus->dispatch($command, $request->validated());
        $user = $command->getUser();
        if ($user) {
            $token = $user->createToken('geydiyyatbaby')->accessToken;
            $response = ['token' => $token];
            return response($response, 200);
        }
        return 'err';
    }
}
