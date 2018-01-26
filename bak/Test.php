<?php

/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2017-04-03
 * Time: 20:05
 */
class Test
{
    public $index;
    public $color;

    public function __construct()
    {
        $this->index = 0;
        $this->color = "red";
    }

    public function say()
    {
        echo $this->index;
        echo $this->color;
        echo "<br />";
    }

    public function setColor($col)
    {
        $this->color = $col;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addIndex()
    {
        $this->index += 1;
    }

    public function getIndex()
    {
        return $this->index;
    }
}

?>