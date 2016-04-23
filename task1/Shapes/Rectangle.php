<?php


namespace YellTest\Shapes;


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


    /**
     * @param $params
     *
     */
    public function initParams($params)
    {

        $this->width = $params['width'];
        $this->height = $params['height'];
        $this->color = $params['color'];

        $this->calculateArea();
        $this->calculatePerimeter();
    }

    /**
     * @return
     */
    protected function calculateArea()
    {

        $this->area = $this->width * $this->height;
    }

    /**
     * @return
     */
    protected function calculatePerimeter()
    {

        $this->perimeter = 2 * ($this->width + $this->height);
    }

    public function getType()
    {
        return 'rectangle';
    }

}