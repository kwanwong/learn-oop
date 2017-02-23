<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 21:42
 */

class LightSwitch{

    /**
     * LightSwitch constructor.
     */
    public function __construct()
    {
    }

    public function on()
    {
        $this->connect();
        var_dump('on');
    }

    public function off()
    {
        
    }

    private function connect()
    {
        var_dump('connect');
    }
}

$light = new LightSwitch();
$light->on();