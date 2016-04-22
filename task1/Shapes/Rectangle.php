<?php


namespace YellTest\Shapes;


class Rectangle extends Figure
{

    protected $width;

    protected $height;


    public function area()
    {

        return $this->width * $this->height;
    }

    public function perimeter()
    {

        return 2 * ($this->width + $this->height);
    }

}