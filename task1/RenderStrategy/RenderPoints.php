<?php


namespace YellTest\RenderStrategy;


/**
 * Class RenderPointsStrategy
 * @package YellTest\Shapes
 */
class RenderPoints extends RenderStrategyAbstract
{


    /**
     *  render shape as string
     */
    public function render()
    {

        parent::render();
        echo "render " . $this->shape->getType() . " as points \n";

    }


}