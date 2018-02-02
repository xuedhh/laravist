<?php
namespace  Check\Core\Autoloader;
spl_autoload_register("Autoloader::autoload");
class Autoloader
{
    private static $autoloadPathArray = array(
        "Core",
        "Core/Auth",
        "Core/Http",
        "Core/Profile",
        "Core/Regions",
        "Core/Exception"
    );
    
    public static function autoload($className)
    {
        foreach (self::$autoloadPathArray as $path) {
            $file = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR.$className.".php";
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
            if (is_file($file)) {
                include_once $file;
                break;
            }
        }
    }
    
    public static function addAutoloadPath($path)
    {
        echo $path;die;;
        array_push(self::$autoloadPathArray, $path);
    }
}
