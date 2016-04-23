<?php

namespace YellTest\Shapes;


/**
 * Class DrawingImageStrategy
 * @package YellTest\Shapes
 */
class DrawingImageStrategy extends DrawingStrategy
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