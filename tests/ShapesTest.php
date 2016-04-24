<?php

use YellTest\Shapes\Shape;

class ShapesTest extends PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $type = 'circle';
        $params = ['radius' => 1, 'color' => 'red'];

        $shape = Shape::factory($type, $params);

        $this->assertInstanceOf('YellTest\Shapes\Types\Circle', $shape);
        $this->assertEquals($shape->getRadius(), 1);
    }

    public function testCreateInvalidTypeShape()
    {
        $type = 'invalid';
        $params = ['radius' => 1, 'color' => 'red'];


        $this->setExpectedException('InvalidArgumentException');

        $shape = Shape::factory($type, $params);


    }

    public function testCreateInvalidParamsShape()
    {
        $type = 'rectangle';
        $params = ['radius123' => 1, 'color' => 'red'];


        $this->setExpectedException('InvalidArgumentException');

        $shape = Shape::factory($type, $params);


    }

}