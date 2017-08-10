<?php
/**
 * Created by PhpStorm.
 * User: Evcehiack
 * Date: 2017/8/10
 * Time: 10:23
 */

namespace Evcehiack\Base;


abstract class ProxyStrategy
{

    protected $client;
    protected $url;

    abstract public function run();

    public function __construct($invite)
    {
        $this->url=$invite;
        $this->client=curl_init();
        curl_setopt($this->client,CURLOPT_RETURNTRANSFER,1);
    }

    public function setHeader($header){
        curl_setopt($this->client,CURLOPT_HTTPHEADER,$header);
        return $this;
    }

    public function get($url){
        curl_setopt($this->client,CURLOPT_URL,$url);
        $res=curl_exec($this->client);
        curl_close($this->client);
        return $res;
    }

    public function post($url,$data){
        curl_setopt($this->client,CURLOPT_URL,$url);
        curl_setopt($this->client,CURLOPT_POST,1);
        curl_setopt($this->client,CURLOPT_POSTFIELDS,$data);
        $res=curl_exec($this->client);
        curl_close($this->client);
        return $res;
    }

}