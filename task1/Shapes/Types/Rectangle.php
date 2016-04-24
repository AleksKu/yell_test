<?php


namespace YellTest\Shapes\Types;

use YellTest\Shapes\Shape;


/**
 * Class Rectangle
 * @package YellTest\Shapes
 */
class Rectangle extends Shape
{

    /**
     * @var float
     */
    protected $width = 0;

    /**
     * @var float
     */
    protected $height = 0;


    public function __construct($width, $height, $color = null)
    {
        $this->setWidth($width);
        $this->setHeight($height);
        if($color !== null)
            $this->setColor($color);

        $this->calculateArea();
        $this->calculatePerimeter();

    }

    /**
     * @param array $params
     *
     * @return Rectangle
     */
    public static function create($params)
    {

        if(!isset($params['height']))
            throw new \InvalidArgumentException('height is required');

        if(!is_numeric($params['height']))
            throw new \InvalidArgumentException('expected number');

        if(!isset($params['width']))
            throw new \InvalidArgumentException('width is required');

        if(!is_numeric($params['width']))
            throw new \InvalidArgumentException('expected number');

        $color = isset($params['color']) ? $params['color'] : null;

        return new static($params['width'], $params['height'], $color);
    }

    /**
     * @return float
     */
    protected function calculateArea()
    {

        $this->area = $this->width * $this->height;
        return $this->area;
    }

    /**
     * @return float
     */
    protected function calculatePerimeter()
    {

        $this->perimeter = 2 * ($this->width + $this->height);

        return $this->perimeter;
    }

    public function getType()
    {
        return 'rectangle';
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

}