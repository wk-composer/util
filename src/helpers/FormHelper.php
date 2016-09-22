<?php
/**
 * Form helper
 * User: walkskyer
 * Date: 2016/9/22
 * Time: 11:27
 */

namespace walkskyer\util\helpers;


class FormHelper{

    /**
     * Form Value
     *
     * Grabs a value from the POST array for the specified field so you can
     * re-populate an input field or textarea.  If Form Validation
     * is active it retrieves the info from the validation class
     *
     * @access	public
     * @param	string
     * @return	mixed
     */
    public static function getValue($field = '', $default = '')
    {
        $field_orgin=$field;
        if(strpos($field,'[')){
            $fields=explode('[',str_replace(']','',$field));
        }else{
            $fields = array($field);
        }
        $methods = array('get'=>&$_GET,'post'=>&$_POST);
        $post = $_POST;
        foreach($methods as $m_name=>&$reqParam){
            $tmp_fields = $fields;
            while($field = array_shift($tmp_fields)){
                if (empty($reqParam) || ($m_name == 'get' && isset($post[$field]))) {
                    isset($post[$field]) && $post=$post[$field];
                    continue;
                }
                if (isset($reqParam[$field])) {
                    if (!is_array($reqParam[$field])) {
                        return $reqParam[$field];
                    }
                }
                if(count($tmp_fields) <=0){
                    break;
                }
                $tmp = &$reqParam;
                unset($reqParam);
                $reqParam = &$tmp[$field];
            }
        }
        return $default;
    }


}