<?php


namespace YellTest\Shapes;


/**
 * Class DrawingPointsStrategy
 * @package YellTest\Shapes
 */
class DrawingStringStrategy extends DrawingStrategy
{


    /**
     *  render shape as string
     */
    public function render()
    {

        foreach ($this->shapes as $shape) {
            echo "render " . $shape->getType() . " as string. Area: " . $shape->getArea() . " \n";
        }
    }


}