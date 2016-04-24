<?php

use YellTest\Shapes\Shape;

class DrawingTest extends PHPUnit_Framework_TestCase
{


    public function testQueue()
    {
        $drawing = new \YellTest\Drawing();

        $shapes = [
            ['type' => 'circle', 'params' => ['radius'=>2, 'color'=>'red']],
            ['type' => 'circle', 'params' => ['radius'=>3, 'color'=>'red']],
            ['type' => 'rectangle', 'params' => ['width'=>3, 'height'=>4, 'color'=>'red']]
        ];

        foreach ($shapes as $shapeParams) {
            $shape = Shape::factory($shapeParams['type'], $shapeParams['params']);
            $drawing->add($shape);
        }


        $this->assertEquals($drawing->getShapesQueue()->count(), 3);

        $drawing->renderAll();

        $this->assertEquals($drawing->getShapesQueue()->count(), 0);

    }

}