<?php

require 'vendor/autoload.php';

$shapes = [
    ['type' => 'circle', 'params' => ['radius'=>2, 'color'=>'red']],
    ['type' => 'circle', 'params' => ['radius'=>3, 'color'=>'red']],
    ['type' => 'rectangle', 'params' => ['width'=>3, 'height'=>4, 'color'=>'red']]
];


$controller = new \YellTest\DrawingController();

$controller->getDrawing()->setRenderStrategy(new \YellTest\RenderStrategy\RenderPoints());

$controller->renderShapes($shapes);



