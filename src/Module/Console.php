<?php

namespace Fine\Worker\Module;

use \Symfony\Component\Console\Application;
use \Fine\Worker\Command\Configure;
use \Fine\Worker\Command\Dispatch;
use \Fine\Worker\Command\Start;
use \Fine\Worker\Command\Status;
use \Fine\Worker\Command\Stop;

class Console
{

    public function application(Application $application)
    {
        $application->addCommands([
            new Configure(),
            new Dispatch(),
            new Start(),
            new Status(),
            new Stop(),
        ]);
    }

}
