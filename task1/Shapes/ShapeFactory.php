<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 22.04.16
 * Time: 13:57
 */

namespace YellTest\Shapes;


class ShapeFactory
{

    public static function create($shapeType)
    {

        if(class_exists($shapeType))
        {
            return new $shapeType();
        }
        else {
            throw new \Exception("Invalid shape type given.");
        }
    }

}