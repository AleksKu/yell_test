<?php


namespace YellTest\RenderStrategy;
use YellTest\Shapes\Shape;


/**
 *  RenderStrategy
 * @package YellTest\RenderStrategy
 */
 class  RenderStrategyAbstract implements RenderStrategyInterface
{

     /**
      * @var Shape
      */
     protected $shape;



     public function setShape(Shape $shape)
     {
        $this->shape = $shape;

         return $this;
     }

     /**
      *
      */
     public function render()
     {
         if(!($this->shape instanceof Shape))
         {
             throw new \LogicException('call setShape() before render');
         }


     }
 }