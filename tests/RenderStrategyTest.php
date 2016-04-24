<?php

use YellTest\RenderStrategy\RenderString;
use YellTest\Shapes\Shape;


class RenderStrategyTest extends PHPUnit_Framework_TestCase
{

    public function testRenderLogic()
    {
       $render = new RenderString();

        $this->setExpectedException('LogicException');

        $render->render();
    }


    public function testRender()
    {
        $render = new RenderString();

        $type = 'circle';
        $params = ['radius' => 1, 'color' => 'red'];

        $shape = Shape::factory($type, $params);
        
        $render->setShape($shape);


        $this->expectOutputString("render circle as string. \n");
        $render->render();
    }




}