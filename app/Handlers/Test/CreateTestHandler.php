<?php

namespace App\Handlers\Test;

use App\Commands\Test\CreateTestCommand;

class CreateTestHandler extends AbstractTestHandler
{

    public function handle(CreateTestCommand $command){
        $this->save($command, 'test');

    }

}
