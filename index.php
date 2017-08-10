<?php
/**
 * Created by PhpStorm.
 * User: Evcehiack
 * Date: 2017/8/10
 * Time: 11:28
 */
function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = str_replace('Evcehiack' . DIRECTORY_SEPARATOR, '', $path);
    $file = __DIR__ . '/src/' . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');

for ($i=0;$i<100;$i++){
    $client=new \Evcehiack\Qgl('http://t.cn/RXnUosH');
    var_dump($client->run());
}