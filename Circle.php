<?php

class Circle
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getRadius()
    {
        return $this->radius;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }
}