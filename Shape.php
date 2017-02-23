<?php

/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 22:03
 */
abstract class Shape
{
    protected $color;

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea();
}

class Square extends Shape {
    protected $length = 4;
    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Circle extends Shape{

    public function getArea()
    {
        return 200;
    }
}

$shape = new Circle('red');
var_dump($shape->getArea());
