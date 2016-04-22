<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 22.04.16
 * Time: 16:08
 */

namespace YellTest\Shapes;


class ShapeRenderPointsStrategy implements  ShapeRenderStrategy
{

    protected $shape;

    public function __construct(Shape $shape )
    {
        $this->shape  = $shape;
    }

    public function render()
    {

        // TODO: Implement render() method.
    }
}