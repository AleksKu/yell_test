<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 24.04.16
 * Time: 12:34
 */

namespace YellTest;

use YellTest\RenderStrategy\RenderStrategyInterface;
use YellTest\RenderStrategy\RenderString;
use YellTest\Shapes\Shape;

/**
 * Class  for rendering collection a shapes
 * @package YellTest
 */
class Drawing
{

    /**
     * @var array
     */
    protected $shapes = [];

    /**
     * Default render strategy = string
     * @var RenderStrategyInterface
     */
    protected $render;

    protected $renderDefault = RenderString::class;

    public function __construct(RenderStrategyInterface $renderStrategy = null)
    {
        if($renderStrategy instanceof  RenderStrategyInterface)
            $this->render = $renderStrategy;
        else
            $this->render = new $this->renderDefault;
    }


    /**
     *
     */
    public  function renderAll()
    {
        foreach ($this->shapes as $shape)
        {
            $this->render->setShape($shape)->render();
        }
    }

    /**
     * @param Shape $shape
     */
    public function add(Shape $shape)
    {
        $this->shapes[] = $shape;
    }
}