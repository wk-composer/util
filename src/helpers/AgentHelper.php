<?php
/**
 * agent helper
 * User: walkskyer
 * Date: 2016/9/22
 * Time: 14:04
 */

namespace walkskyer\util\helpers;


class AgentHelper{
    /**
     * convert ip value to int value
     *
     * @param string $ip ip address string
     * @return number
     */
    public static function ip2int($ip){
        return bindec(decbin(ip2long($ip)));
    }

    /**
     * return the client ip
     *
     * @return mixed
     */
    public static function clientIP(){
        return $_SERVER['REMOTE_ADDR'];
    }

}