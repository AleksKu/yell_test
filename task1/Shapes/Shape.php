<?php

namespace YellTest\Shapes;


/**
 * Class Shape
 * @package YellTest\Shapes
 */
abstract class Shape
{


    /**
     * @var mixed
     */
    protected $color;

    /**
     * @var float
     */
    protected $area;

    /**
     * @var float
     */
    protected $perimeter;


    /**
     * @param $params
     * @return mixed
     *
     * @todo validate params
     */
    public abstract function initParams($params);

    /**
     * calculate area
     */
    protected abstract function calculateArea();

    /**
     * calculate perimeter
     * @return
     */
    protected abstract function calculatePerimeter();

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     *
     * @return float
     */
    public function getPerimeter()
    {
        return $this->perimeter;
    }

    /**
     *
     * @return float
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return __CLASS__;
    }


}