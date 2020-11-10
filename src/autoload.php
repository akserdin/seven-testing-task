<?php


namespace Site;


final class Autoloader
{
    public static function load(string $className)
    {
        $className = str_replace(__NAMESPACE__, '', $className);
        $className = str_replace('\\', '', $className);

        include_once(APP_PATH . 'src/' . $className . '.php');
    }
}

spl_autoload_register(__NAMESPACE__ . "\\Autoloader::load");
