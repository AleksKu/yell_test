<?php


namespace YellTest;

use YellTest\RenderStrategy\RenderStrategyFactory;
use YellTest\Shapes\ShapeFactory;


class DrawingController
{

    /**
     * @var RenderStrategy
     */
    protected $RenderStrategy;

    /**
     * @var string
     */
    protected $RenderStrategyName = 'string';


    /**
     * RenderController constructor.
     * @param  string
     */
    function __construct( $RenderStrategyName = 'string')
    {
        $this->RenderStrategyName = $RenderStrategyName;

       $this->RenderStrategy =  RenderStrategyFactory::create($this->RenderStrategyName);

    }

    /**
     * @param array $shapesParams
     * @throws \Exception
     */
    public function renderShapes($shapesParams = [])
    {
        foreach ($shapesParams as $shapeParams) {
            $shape = ShapeFactory::create($shapeParams['type'], $shapeParams['params']);
            $this->RenderStrategy->add($shape);
        }

        $this->RenderStrategy->render();
    }


}