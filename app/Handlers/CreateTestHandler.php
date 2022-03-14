<?php

namespace App\Handlers;

use App\Commands\CreateTestCommand;

class CreateTestHandler extends AbstractTestHandler
{

    public function handle(CreateTestCommand $command){
        $this->save($command, 'test');

    }

}
