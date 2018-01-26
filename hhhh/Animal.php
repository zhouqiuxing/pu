<?php

/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2017-04-03
 * Time: 20:05
 */
class Animal
{
    public $weight;// 体重 kg
    public $sex;//性别
    public $bodyTemperature;// 体温

   public function __construct()
    {
        $this->weight = 30;
    }

    public function setWeight($wet)
    {
        $this->weight = $wet;
    }

    public function geZhongLiang()
    {
        return $this->weight;
    }
}