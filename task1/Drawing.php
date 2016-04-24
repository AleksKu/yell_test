<?php


namespace YellTest;

use YellTest\RenderStrategy\RenderStrategyInterface;
use YellTest\RenderStrategy\RenderString;
use YellTest\Shapes\Shape;
use SplQueue;

/**
 * Class  for rendering collection a shapes
 * @package YellTest
 */
class Drawing
{

    /**
     *
     * Shapes queue for render
     * @var SplQueue
     */
    protected $shapesQueue;

    /**
     *
     * @var RenderStrategyInterface
     */
    protected $render;

    /**
     * Default render strategy = string
     * @var
     */
    protected static $renderDefault = RenderString::class;

    public function __construct()
    {

        $this->shapesQueue = new SplQueue();

        $this->render = new static::$renderDefault;
    }

    
    public function setRenderStrategy(RenderStrategyInterface $renderStrategy)
    {
        $this->render = $renderStrategy;
    }


    /**
     * render all shapes
     */
    public function renderAll()
    {

        $this->shapesQueue->setIteratorMode(SplQueue::IT_MODE_DELETE);
        foreach ($this->shapesQueue as $shape) {
            $this->render->setShape($shape)->render();
        }
    }

    /**
     * add shape to queue
     * @param Shape $shape
     */
    public function add(Shape $shape)
    {
        $this->shapesQueue->enqueue($shape);
    }

    /**
     * @return \SplQueue
     */
    public function getShapesQueue()
    {
        return $this->shapesQueue;
    }
}