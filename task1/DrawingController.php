<?php


namespace YellTest;

use YellTest\RenderStrategy\RenderStrategyInterface;
use YellTest\Shapes\ShapeFactory;


class DrawingController
{

    /**
     * @var Drawing
     */
    protected $drawing;


    /**
     * @var bool
     */
    protected $isValidRequest = false;


    /**
     * RenderController constructor.
     * @param  string
     */
    function __construct(RenderStrategyInterface $renderStrategy = null)
    {
        $this->drawing = new Drawing($renderStrategy);

    }

    /**
     * @param array $shapesParams
     * @throws \Exception
     */
    public function renderShapes($shapesParams = [])
    {
        $shapesParams = $this->validateRequest($shapesParams);

        if ($this->isValidRequest === false)
            throw new \InvalidArgumentException('Invalid request params given.');

        foreach ($shapesParams as $shapeParams) {
            $shape = ShapeFactory::create($shapeParams['type'], $shapeParams['params']);
            $this->drawing->add($shape);
        }

        $this->drawing->renderAll();
    }

    /**
     * todo implement validation
     * @param $request
     * @return array
     */
    protected function validateRequest($request)
    {

        $this->isValidRequest = true;
        return $request;
    }


}