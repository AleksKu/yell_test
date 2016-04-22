<?php


namespace YellTest;

use YellTest\Shapes\ShapeRenderStrategy;


class GraphicEditor
{

    protected $renderStrategy;

    protected $shapesRenderQueue;

    function __construct(ShapeRenderStrategy $renderStrategy)
    {
        $this->renderStrategy = $renderStrategy;
        $this->shapesRenderQueue = new \SplQueue();
    }

    public function addShape($shape)
    {
        $this->shapesRenderQueue->enqueue($shape);
    }




    function execute()
    {

    }
}