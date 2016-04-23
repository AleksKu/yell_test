<?php


namespace YellTest\Shapes;


/**
 * Class DrawingStrategy
 * @package YellTest\Shapes
 */
abstract class DrawingStrategy
{

    /**
     * @var array
     */
    protected $shapes = [];


    /**
     *
     */
    public abstract function render();

    /**
     * @param Shape $shape
     */
    public function add(Shape $shape)
    {
        $this->shapes[] = $shape;
    }


}