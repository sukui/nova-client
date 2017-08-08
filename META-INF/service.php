<?php

use \ZanPHP\Contracts\ConnectionPool\Connection;
use \ZanPHP\Container\Container;
use \ZanPHP\NovaClient\NovaClient;


$container = Container::getInstance();
$container->bind("heartbeatable:nova", function($_, Connection $novaConnection) {
    $hbServName = "com.youzan.service.test";
    return NovaClient::getInstance($novaConnection, $hbServName);
});

return [

];