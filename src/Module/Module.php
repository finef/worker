<?php

namespace Fine\Worker\Module;

use \Fine\Container\Container;

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

    protected function _pool()
    {
        
    }



}
