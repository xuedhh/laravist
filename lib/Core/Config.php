<?php


namespace  Check\Core;
use Check\Core\Autoloader\Autoloader;
use Check\Core\Regions\EndpointConfig;
use Check\Core\Regions\LocationService;
//include_once 'Autoloader/Autoloader.php';
//include_once 'Regions/EndpointConfig.php';
//include_once 'Regions/LocationService.php';

//config sdk auto load path.
//Autoloader::addAutoloadPath("aliyun-php-sdk-ecs");
//Autoloader::addAutoloadPath("aliyun-php-sdk-batchcompute");
//Autoloader::addAutoloadPath("aliyun-php-sdk-sts");
//Autoloader::addAutoloadPath("aliyun-php-sdk-push");
//Autoloader::addAutoloadPath("aliyun-php-sdk-ram");
//Autoloader::addAutoloadPath("aliyun-php-sdk-ubsms");
//Autoloader::addAutoloadPath("aliyun-php-sdk-ubsms-inner");
//Autoloader::addAutoloadPath("Api");
//Autoloader::addAutoloadPath("aliyun-php-sdk-dm");
//Autoloader::addAutoloadPath("aliyun-php-sdk-iot");
//Autoloader::addAutoloadPath("aliyun-php-sdk-jaq");
//Autoloader::addAutoloadPath("aliyun-php-sdk-cs");
//Autoloader::addAutoloadPath("aliyun-php-sdk-live");
//Autoloader::addAutoloadPath("aliyun-php-sdk-vpc");
//Autoloader::addAutoloadPath("aliyun-php-sdk-kms");
//Autoloader::addAutoloadPath("aliyun-php-sdk-rds");
//Autoloader::addAutoloadPath("aliyun-php-sdk-slb");
//Autoloader::addAutoloadPath("aliyun-php-sdk-cms");

//config http proxy
define('ENABLE_HTTP_PROXY', false);
define('HTTP_PROXY_IP', '127.0.0.1');
define('HTTP_PROXY_PORT', '8888');
class Config
{
    private static $loaded = false;
    public static function load(){
        if(self::$loaded) {
            return;
        }
        Autoloader::addAutoloadPath("Api");
        EndpointConfig::load();
        LocationService::addEndPoint();
        self::$loaded = true;
    }
}