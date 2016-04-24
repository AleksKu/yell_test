<?php

namespace YellTest\RenderStrategy;


/**
 * Class RenderImageStrategy
 * @package YellTest\Shapes
 */
class RenderImage extends RenderStrategyAbstract
{

    protected $shape;


    /**
     *  render shape as image
     */
    public function render()
    {

        parent::render();
        echo "render " . $this->shape->getType() . " as image. Area: " . $this->shape->getArea() . " \n";


    }


}