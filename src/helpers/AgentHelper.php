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
     * return the client ip use int value
     * @return number
     */
    public static function client_ip(){
        return bindec(decbin(ip2long($_SERVER['REMOTE_ADDR'])));
    }

}