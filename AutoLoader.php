<?php

//User_Profile
//PSR-0
//Учет пространства имен, пространств имен может не быть
class AutoLoader
{

    public static function autoload(string $className): bool
    {
        //$class = str_replace('\\', '/', $class_name);
        //require_once $class . '.php';

        //\namespace\className
        $className = ltrim($className, '\\');

        $filename = '';
        $nameSpace = '';

        //Условие, выполняется, если есть пространство имен
        if ($lastNsPos = strrpos($className, '\\')) {
            $nameSpace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $filename = str_replace('\\', DIRECTORY_SEPARATOR, $nameSpace) . DIRECTORY_SEPARATOR;
        }

        //Итоговый путь к файлу
        $filename .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        //Существует ли файл
        if (file_exists($filename)) {
            require_once $filename;
            return true;
        }
        return false;
    }
}

spl_autoload_register(['AutoLoader', 'autoload']);