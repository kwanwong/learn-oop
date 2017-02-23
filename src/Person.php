<?php

/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 22:59
 */
namespace Ebrun;

class Person{
    public $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age>=18 ? $age : 'forbidden';
    }

}