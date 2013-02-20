<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Worker
 * Date: 20.02.13
 * Time: 12:46
 * To change this template use File | Settings | File Templates.
 */


include_once "/../CalculateZoll.php";

class CalculateZollTest extends PHPUnit_Framework_TestCase
{

    public function testCmToZoll(){
        $calcZoll = new CalculateZoll();
        $cm = 10;

        $zoll = $calcZoll->cmToZoll($cm);

        $this->assertEquals($zoll, $cm*2.54); 
    }

}
