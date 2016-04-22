<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 22.04.16
 * Time: 11:39
 */

namespace YellTest\Shapes;




class Circle extends Shape
{

    /**
     * @var
     */
    protected $radius;


    public function area()
    {

        return M_PI * pow($this->radius(), 2);
    }

    public function perimeter()
    {

        return 2 * M_PI * $this->radius();
    }


    public function radius()
    {
        return $this->radius;
    }

}