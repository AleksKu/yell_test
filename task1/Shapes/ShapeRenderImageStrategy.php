<?php

namespace YellTest\Shapes;


class ShapeRenderImageStrategy implements ShapeRenderStrategy
{


    protected $shape;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function render()
    {

        // TODO: Implement render() method.
    }
}