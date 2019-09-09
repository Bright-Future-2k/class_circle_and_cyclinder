<?php


class Circle
{
    public $radius;
    public $color;

    public function __toString ()
    {
        return "radius: " . $this->radius . "color: " . $this->color;
        // TODO: Implement __toString() method.
    }
    public function setRadius ($radius){
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function area (){
        return $this->radius * $this->radius * pi();
    }
}