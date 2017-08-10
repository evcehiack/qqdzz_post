<?php
/**
 * Created by PhpStorm.
 * User: Evcehiack
 * Date: 2017/8/10
 * Time: 11:18
 */

namespace Evcehiack;


use Evcehiack\Base\ProxyStrategy;

class Qgl extends ProxyStrategy
{

    public function __construct($invite)
    {
        parent::__construct($invite);
    }

    public function run()
    {
        $this->setHeader([
            'Host:www.qqgonglue.com',
            'X-Requested-With:XMLHttpRequest',
            'User-Agent:Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Mobile/14E277 MicroMessenger/6.5.7 NetType/WIFI Language/zh_CN',
            'Referer:http://www.qqgonglue.com/'
        ]);
        //curl_setopt($this->client,CURLOPT_REFERER,'http://www.qqgonglue.com/');
        //curl_setopt($this->client,)
        return $this->get('http://www.qqgonglue.com/php/do12.php?url='.$this->url);
    }
}