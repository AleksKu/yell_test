<?php

namespace YellTest\Shapes;


/**
 * Class ShapeFactory
 * @package YellTest\Shapes
 */
class ShapeFactory
{

    /**
     * @param $shapeType
     * @param $params
     * @throws \InvalidArgumentException
     */
    public static function create($shapeType, $params)
    {


        $shapeClass = __NAMESPACE__ . "\\" . ucwords($shapeType);

        if (class_exists($shapeClass)) {
            $shape = new $shapeClass();
            $shape->initParams($params);
            return $shape;

        } else {
            throw new \InvalidArgumentException("Invalid shape type given.");
        }
    }


}