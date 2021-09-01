<?php
namespace cache_test;

use Predis;

class RedisCache
{
    private $host = '127.0.0.1';
    private $port = 6379;
    private static $redisClient;

    //final constructor function for redis singleton
    private final function __construct()
    {
        try {
           self::$redisClient = new Predis\Client([
                'scheme' => 'tcp',
                'host'   => $this->host,
                'port'   => $this->port,
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    //static method to get the singleton without instantiating the class
    public static function getConn(): Predis\Client
    {
        if(!isset(self::$redisClient)) {
           self::$redisClient =  new Predis\Client();
        }
        return self::$redisClient;
    }

}