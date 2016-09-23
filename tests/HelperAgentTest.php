<?php
use walkskyer\util\helpers\AgentHelper;
use PHPUnit\Framework\TestCase;
/**
 * AgentHelper test.
 * User: walkskyer
 * Date: 2016/9/23
 * Time: 9:23
 */
class HelperAgentTest extends TestCase
{
    public function IPDatas(){
        $ips = [['127.0.0.1',2130706433], ['192.168.1.1',3232235777], ['10.10.10.10',168430090]];
        return $ips;
    }

    /**
     *
     * @dataProvider IPDatas
     */
    public function testClientIp($ip,$ip_int){
        $_SERVER['REMOTE_ADDR'] = $ip;
        $this->assertEquals(AgentHelper::clientIP(),$ip);
    }

    /**
     * @dataProvider IPDatas
     */
    public function testIP2int($ip,$ip_int){
        $this->assertEquals(AgentHelper::ip2int($ip), $ip_int);
    }
}