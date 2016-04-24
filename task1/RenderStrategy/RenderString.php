<?php


namespace YellTest\RenderStrategy;


/**
 * Class RenderPointsStrategy
 * @package YellTest\Shapes
 */
class RenderString extends RenderStrategyAbstract
{


    /**
     *  render shape as string
     */
    public function render()
    {

        parent::render();
        echo "render " . $this->shape->getType() . " as string. Area: " . $this->shape->getArea() . " \n";

    }


}