<?php

namespace App\Commands\Test;

use App\CommandBus\Command;

class AbstractTestCommand extends Command
{

    public ?string $test;

}
