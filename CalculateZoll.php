<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Worker
 * Date: 20.02.13
 * Time: 12:31
 * To change this template use File | Settings | File Templates.
 */
class CalcualteZoll
{

    private $zoll;
    private  $zollunit = 2.54;

    public function cmToZoll($cm){
        return $this->zollunit*$cm;

    }
}
