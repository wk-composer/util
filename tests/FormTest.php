<?php

/**
 * Form Test
 * User: walkskyer
 * Date: 2016/9/22
 * Time: 13:50
 */
use walkskyer\util\helpers\Form;
class FormTest extends PHPUnit_Framework_TestCase
{
    public function testGetValue(){
        $_GET=array('a'=>'V_a','b'=>'V_b','c'=>'V_c','d'=>'V_d',);
        $_POST=array('a'=>'V_p_a','b'=>'V_p_b','c'=>'V_p_c');

        foreach($_POST as $k=>$v) {
            $this->assertEquals(Form::getValue($k), $v);
        }
        $this->assertEquals(Form::getValue('d'),$_GET['d']);
    }
}
