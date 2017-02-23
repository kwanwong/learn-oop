<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 21:51
 */
class Mother{
    protected function getEyesCount()
    {
        return 2;
    }
}

class Child extends Mother {
    public function getEyes()
    {
        return $this->getEyesCount();
    }
}

$child = new Child();
var_dump($child->getEyes());