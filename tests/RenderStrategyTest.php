<?php

use YellTest\RenderStrategy\RenderStrategyFactory;


class RenderStrategyTest extends PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $type = 'string';


        $strategy = RenderStrategyFactory::create($type);

        $this->assertInstanceOf('YellTest\RenderStrategy\RenderStringStrategy', $strategy);
    }

    public function testCreateInvalidShape()
    {
        $type = 'invalid';



        $this->setExpectedException('InvalidArgumentException');

        RenderStrategyFactory::create($type);


    }


}