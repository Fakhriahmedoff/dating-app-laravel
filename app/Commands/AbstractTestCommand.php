<?php

namespace App\Commands;

use App\CommandBus\Command;

class AbstractTestCommand extends Command
{

    public ?string $test;

}
