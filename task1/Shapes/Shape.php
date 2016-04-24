<?php

namespace YellTest\Shapes;


/**
 * Class Shape
 * @package YellTest\Shapes
 */
abstract class Shape
{


    /**
     * todo cast to Color type
     * @var mixed
     */
    protected $color = '#000';

    /**
     * @var float
     */
    protected $area;

    /**
     * @var float
     */
    protected $perimeter;


    /**
     * Factory method
     * @param $type
     * @param $params
     * @return mixed
     */
    public static function factory($type, $params)
    {
        $shapeClass = __NAMESPACE__ . "\\Types\\" . ucwords($type);

        if (class_exists($shapeClass)) {
            $shape = $shapeClass::create($params);

            return $shape;

        } else {
            throw new \InvalidArgumentException("Invalid shape type given.");
        }
    }

    /**
     * calculate area
     * @return float
     */
    protected abstract function calculateArea();

    /**
     * calculate perimeter
     * @return float
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