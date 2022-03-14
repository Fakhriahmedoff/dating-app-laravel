<?php

namespace App\Handlers;

use App\Commands\AbstractTestCommand;

abstract class AbstractTestHandler
{

    public function save(AbstractTestCommand $command){
        return dd($command);
    }

}
