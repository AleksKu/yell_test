<?php


namespace YellTest;

use YellTest\Shapes\DrawingStrategyFactory;
use YellTest\Shapes\ShapeFactory;


class DrawingController
{

    /**
     * @var DrawingStrategy
     */
    protected $drawingStrategy;

    /**
     * @var string
     */
    protected $drawingStrategyName = 'string';


    /**
     * DrawingController constructor.
     * @param DrawingStrategy string
     */
    function __construct( $drawingStrategyName = 'string')
    {
        $this->drawingStrategyName = $drawingStrategyName;

       $this->drawingStrategy =  DrawingStrategyFactory::create($this->drawingStrategyName);

    }

    /**
     * @param array $shapesParams
     * @throws \Exception
     */
    public function renderShapes($shapesParams = [])
    {
        foreach ($shapesParams as $shapeParams) {
            $shape = ShapeFactory::create($shapeParams['type'], $shapeParams['params']);
            $this->drawingStrategy->add($shape);
        }

        $this->drawingStrategy->render();
    }


}