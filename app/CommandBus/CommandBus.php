<?php

namespace CommandBus;

use League\Tactician\CommandBus as TacticianCommandBus;

class MyCommandBus implements CommandBusInterface
{
    private TacticianCommandBus $bus;

    public function __construct(TacticianCommandBus $bus)
    {
        $this->bus = $bus;
    }

    public function dispatch(Command $command, array $payload = []): void
    {
        if (filled($payload)) {
            $command->handlePayload($payload);
        }

        $this->bus->handle($command);
    }
}
