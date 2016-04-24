<?php


namespace YellTest\RenderStrategy;

use YellTest\Shapes\Shape;


/**
 * Class RenderStrategy
 * @package YellTest\Shapes
 */
abstract class RenderStrategy
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