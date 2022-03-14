<?php

namespace App\Http\Controllers;

use CommandBus\CommandBusInterface;

class TestController extends Controller
{
    private CommandBusInterface $bus;

    public function __construct(CommandBusInterface $bus)
    {
        $this->bus = $bus;
    }

    public function test(){
        $this->bus->dispatch();
    }
}
