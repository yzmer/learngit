<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-03
 * Time: 13:49
 */

use Workerman\Worker;

require_once __DIR__.'/Workerman/Autoloader.php';

$http_worker = new Worker("http://0.0.0.0:2345");

$http_worker->count = 4;

$http_worker->onMessage = function($connection,$data){
  $connection->send('hello world');
};

Worker::runAll();