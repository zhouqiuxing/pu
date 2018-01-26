<?php

/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2017-12-26
 * Time: 21:12
 */
class Plant
{
    public $height;// 平均高度
    public $season;// 开放季节
    public $photosyntheticTime;// 每日光合时长 hour
    public $co2;// 每年吸收的二氧化碳量 g
    public $o2;// 每年转化的氧气 g
    public $type;//类型
    public  $hrt;

    public function __construct()
    {

    }

    public function seHeight($heigt)
    {
        $this->height = $heigt;
    }

    public function getHeight()
    {
        //$this->seHeight(55);
        echo $this->height;
        return $this->height;
    }

    public function settype($type)
    {
        $this->type = $type;
    }

    public function gettype()
    {
        //$this->setype("tree");
        echo $this->type;
        return $this->type;
    }

    public function hdhdhd($co2, $o2)
    { // $lll = [$co2,$o2];
        $this->co2 = $co2;
        $this->o2 = $o2;
      // $this->hrt=$lll;
    }

    public function jjjj()
    {
        $lll= [$this->co2,$this->o2];
     //  $hrt= ["co2","o2"];
//        return $this->co2;
//        return $this->o2;
      //  $this->hrt=$lll;
        return $lll;
    }
}