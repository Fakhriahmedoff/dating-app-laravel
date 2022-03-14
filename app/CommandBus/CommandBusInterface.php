<?php

namespace CommandBus;

interface CommandBusInterface
{
    public function dispatch(Command $command, array $payload = []): void;
}
