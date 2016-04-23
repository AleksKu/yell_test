<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 23.04.16
 * Time: 18:15
 */

namespace YellTest\Shapes;


class DrawingStrategyFactory
{
    /**
     * @param $strategyType
     * @throws \Exception
     */
    public static function create($strategyType)
    {


        $strategyClass = __NAMESPACE__ . "\\Drawing" . ucwords($strategyType).'Strategy';

        if (class_exists($strategyClass)) {
            $stategy = new $strategyClass();

            return $stategy;

        } else {
            throw new \InvalidArgumentException("Invalid strategy type given.");
        }
    }
}