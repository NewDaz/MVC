<?php

/**
 * Функция __autoload для автоматического подключения классов
 */

function __autoload($class_name)
{
    // Массив папок, в которых могут находиться необходимые классы
    $array_path=array (
        '/models/',
        '/components/',
        '/controllers',
    );

    foreach ($array_path as $path)
    {
        // Формируем имя и путь к файлу с классом
        $path=ROOT.$path.$class_name.'.php';

        if(is_file($path)) {
            include_once $path;
        }
    }
}