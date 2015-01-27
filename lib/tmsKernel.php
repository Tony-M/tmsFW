<?php

function tms_autoloader($class) {

}

spl_autoload_register('tms_autoloader');

class tmsKernel
{
    private static $_instance = null;
    protected $DEBUG_MODE = false;

    private function __construct($debug = false)
    {
        if (!is_bool($debug)) $debug = false;
        $this->DEBUG_MODE = $debug;

        define('tmdDEBUG', $this->DEBUG_MODE);

        tmsConfig::getInstance()->init();
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    static public function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function process()
    {

    }
}