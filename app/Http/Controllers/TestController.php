<?php

namespace App\Http\Controllers;

use App\Commands\CreateTestCommand;
use App\CommandBus\CommandBusInterface;

class TestController extends Controller
{
    private CommandBusInterface $bus;

    public function __construct(CommandBusInterface $bus)
    {
        $this->bus = $bus;
    }

    public function test(){
        $command = new CreateTestCommand();
        $this->bus->dispatch($command, ['test'=>'test']);
    }
}
