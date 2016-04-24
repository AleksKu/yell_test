<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 23.04.16
 * Time: 18:15
 */

namespace YellTest\RenderStrategy;


class RenderStrategyFactory
{
    /**
     * @param $strategyType
     * @throws \InvalidArgumentException
     */
    public static function create($strategyType)
    {


        $strategyClass = __NAMESPACE__ . "\\Render" . ucwords($strategyType);

        if (class_exists($strategyClass)) {
            $stategy = new $strategyClass();

            return $stategy;

        } else {
            throw new \InvalidArgumentException("Invalid strategy type given.");
        }
    }
}