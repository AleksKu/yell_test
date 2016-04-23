<?php

use YellTest\Shapes\ShapeFactory;

class ShapeFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $type = 'circle';
        $params = ['radius' => 1, 'color' => 'red'];

        $shape = ShapeFactory::create($type, $params);

        $this->assertInstanceOf('YellTest\Shapes\Circle', $shape);
        $this->assertEquals($shape->getRadius(), 1);
    }

    public function testCreateInvalidShape()
    {
        $type = 'invalid';
        $params = ['radius' => 1, 'color' => 'red'];


        $this->setExpectedException('InvalidArgumentException');

        $shape = ShapeFactory::create($type, $params);


    }

}