<?php
use walkskyer\util\helpers\ArrayHelper;
/**
 * Array Helper test.
 * User: walkskyer
 * Date: 2016/9/23
 * Time: 9:05
 */
class HelperArrayTest extends PHPUnit_Framework_TestCase
{

    public function testShuffleKey(){
        $array1 = $array2 = ['k1'=>'v1','k2'=>'v2','k3'=>'v3','k4'=>'v4','k5'=>'v5','k6'=>'v6'];
        $this->assertEquals(array_keys($array1),array_keys($array2));
        ArrayHelper::shuffleKey($array1);
        $this->assertEquals($array1,$array2);
        $this->assertNotEquals(array_keys($array1),array_keys($array2));
    }
}