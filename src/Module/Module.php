<?php

namespace Fine\Worker\Module;

use \Fine\Container\Container;
use \Fine\Worker\Pool\Pool;

class Module extends Container
{

    protected $_app;

    public function register($app)
    {
        $this->_app = $app;
    }

    protected function _mod()
    {
        return $this->mod = new Container(array('__invoke' => array(
            'console' => '\Fine\Worker\Module\Console',
        )));
    }

    protected function _job()
    {
        $this->job = new Container();
        $this->_app->mod->each()->worker->job($this->job);
        return $this->job;
    }

    protected function _pool()
    {
        $this->pool = new Pool();
        $this->_app->mod->each()->worker->pool($this->pool);
        return $this->pool;
    }



}
