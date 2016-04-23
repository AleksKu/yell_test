<?php

namespace YellTest\Shapes;


/**
 * Class Circle
 * @package YellTest\Shapes
 */
class Circle extends Shape
{

    /**
     * @var float
     */
    protected $radius = 0;


    /**
     * @param array $params
     */
    public function initParams($params)
    {

        $this->radius = $params['radius'];
        $this->color = $params['color'];
        $this->calculateArea();
        $this->calculatePerimeter();
    }

    /**
     * @return
     */
    public function calculateArea()
    {

        $this->area = M_PI * pow($this->getRadius(), 2);
    }

    /**
     * @return
     */
    public function calculatePerimeter()
    {

        $this->perimeter = 2 * M_PI * $this->getRadius();
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getType()
    {
        return 'circle';
    }


}