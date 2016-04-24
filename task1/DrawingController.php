<?php


namespace YellTest;

use YellTest\RenderStrategy\RenderStrategyInterface;
use YellTest\Shapes\Shape;



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
     * @param  RenderStrategyInterface
     */
    function __construct()
    {
        $this->drawing = new Drawing();

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
            $shape = Shape::factory($shapeParams['type'], $shapeParams['params']);
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

    /**
     * @return Drawing
     */
    public function getDrawing()
    {
        return $this->drawing;
    }

    /**
     * @param Drawing $drawing
     */
    public function setDrawing(Drawing $drawing)
    {
        $this->drawing = $drawing;
    }


}