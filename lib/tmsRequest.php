<?php

class tmsRequest
{
    private static $_instance = null;

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

    /**
     * return $_GET[$id] value
     * @param string $id
     * @param mixed $default_value
     * @throws Exception
     * @return mixed value
     */
    public function getGetParametr($id = null, $default_value = null)
    {
        if (is_null($id)) throw new Exception();
        return (ISSET($_GET[$id]) ? $_GET[$id] : $default_value);
    }

    /**
     * return $_POST[$id] value
     * @param string $id
     * @param mixed $default_value
     * @throws Exception
     * @return mixed value
     */
    public function getPostParametr($id = null, $default_value = null)
    {
        if (is_null($id)) throw new Exception();
        return (ISSET($_POST[$id]) ? $_POST[$id] : $default_value);
    }

    /**
     * return $id value
     * @param string $id
     * @param mixed $default_value
     * @throws Exception
     * @return mixed value
     */
    public function getParametr($id = null, $default_value = null)
    {
        if (is_null($id)) throw new Exception();
        return (isset($_POST[$id]) ? $_POST[$id] : (isset($_GET[$id]) ? $_GET[$id] : $default_value));
    }

    /**
     * return all $_GET parametrs
     * @return mixed
     */
    public function getGetParametrs()
    {
        return $_GET;
    }

    /**
     * return all $_POST parametrs
     * @return mixed
     */
    public function getPostParametrs()
    {
        return $_GET;
    }

}