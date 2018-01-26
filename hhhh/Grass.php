<?php

/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2017-12-26
 * Time: 23:21
 */
class Grass extends Plant
{
    public $color;// 颜色

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        echo $this->gettype();
        return $this->color;
    }

}