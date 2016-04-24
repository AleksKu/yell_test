<?php

namespace YellTest\RenderStrategy;


/**
 * Class RenderImageStrategy
 * @package YellTest\Shapes
 */
class RenderImage extends RenderStrategy
{


    /**
     *  render shape as image
     */
    public function render()
    {

        foreach ($this->shapes as $shape) {
            echo "render " . $shape->getType() . " as image \n";
        }
    }


}