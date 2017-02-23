<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 21:30
 */
class Person{
    public $name;
    public $age;

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

$person = new Person('Kwan');
$person->setAge(17);

var_dump($person);