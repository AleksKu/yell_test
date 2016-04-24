<?php


namespace YellTest\RenderStrategy;
use YellTest\Shapes\Shape;


/**
 *  RenderStrategy
 * @package YellTest\RenderStrategy
 */
interface RenderStrategyInterface
{


    /**
     *
     */
    public function render();

    public function setShape(Shape $shpahe);

}