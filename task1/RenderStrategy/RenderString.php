<?php


namespace YellTest\RenderStrategy;


/**
 * Class RenderPointsStrategy
 * @package YellTest\Shapes
 */
class RenderString extends RenderStrategy
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