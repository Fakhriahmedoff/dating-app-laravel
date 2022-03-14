<?php

namespace App\Handlers\Test;

use App\Commands\Test\AbstractTestCommand;

abstract class AbstractTestHandler
{

    public function save(AbstractTestCommand $command){
        return dd($command);
    }

}
