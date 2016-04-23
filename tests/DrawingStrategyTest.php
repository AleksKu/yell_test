<?php

use YellTest\Shapes\DrawingStrategyFactory;


class DrawingStrategyTest extends PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $type = 'string';


        $strategy = DrawingStrategyFactory::create($type);

        $this->assertInstanceOf('YellTest\Shapes\DrawingStringStrategy', $strategy);
    }

    public function testCreateInvalidShape()
    {
        $type = 'invalid';



        $this->setExpectedException('InvalidArgumentException');

        DrawingStrategyFactory::create($type);


    }


}