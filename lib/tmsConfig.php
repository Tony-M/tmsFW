<?php

class tmsConfig
{

    private static $_instance = null;

    protected $DATA = array();

    private function __construct()
    {

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

    public function init()
    {
        $current_path = dirname(__FILE__);
        $root_path = preg_replace('/(\/lib\/)$/', '/', $current_path);

        $this->DATA['ROOT_PATH'] = $root_path;
        $this->DATA['CACHE_PATH'] = self::$ROOT_PATH . '/cache/';
        $this->DATA['CONFIG_PATH'] = self::$ROOT_PATH . '/config/';
        $this->DATA['LIB_PATH'] = self::$ROOT_PATH . '/lib/';
        $this->DATA['LOG_PATH'] = self::$ROOT_PATH . '/log/';
        $this->DATA['WEB_PATH'] = self::$ROOT_PATH . '/web/';
    }

    public static function getRootPath()
    {
        return self::getInstance()->getValue('ROOT_PATH');
    }

    public static function getCachePath()
    {
        return self::getInstance()->getValue('CACHE_PATH');
    }

    public static function getConfigPath()
    {
        return self::getInstance()->getValue('CONFIG_PATH');
    }

    public static function getLibPath()
    {
        return self::getInstance()->getValue('LIB_PATH');
    }

    public static function getLogPath()
    {
        return self::getInstance()->getValue('LOG_PATH');
    }

    public static function getWebPath()
    {
        return self::getInstance()->getValue('WEB_PATH');
    }

    public function getValue($key = '', $default = null)
    {
        if (is_null($key)) throw new Exception();
        if (isset($this->DATA[$key]))
            return $this->DATA[$key];
        else return $default;
    }

    public function getValues()
    {
        return $this->DATA;
    }

    public static function getAll()
    {
        return self::getInstance()->getValues();
    }
}