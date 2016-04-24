<?php

namespace YellTest\Shapes\Types;

use YellTest\Shapes\Shape;

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


    public function __construct($radius, $color = null)
    {
        $this->setRadius($radius);

        if($color !== null)
            $this->setColor($color);

        $this->calculateArea();
        $this->calculatePerimeter();

    }

    /**
     * @param array $params
     * 
     * @return Circle
     */
    public static function create($params)
    {

        if(!isset($params['radius']))
            throw new \InvalidArgumentException('radius is required');

        if(!is_numeric($params['radius']))
            throw new \InvalidArgumentException('expected number');

        $color = isset($params['color']) ? $params['color'] : null;

        return new static($params['radius'], $color);
    }

    /**
     * @return float
     */
    public function calculateArea()
    {

        $this->area = M_PI * pow($this->getRadius(), 2);

        return $this->area;
    }

    /**
     * @return float
     */
    public function calculatePerimeter()
    {

        $this->perimeter = 2 * M_PI * $this->getRadius();

        return $this->perimeter;
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