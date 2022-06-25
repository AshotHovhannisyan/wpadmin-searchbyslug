<?php

class AHPLInitialize
{
    private static $instance = null;

    private function __construct()
    {
        $this->init();
    }

    public static function getInstance()
    {
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function init()
    {
        require_once( AHPL_PATH . 'search.php');
    }


}


AHPLInitialize::getInstance();
