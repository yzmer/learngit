<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-03
 * Time: 14:30
 */

use Workerman\Worker;

require_once __DIR__.'/Workerman/Autoloader.php';

$ws_worker = new Worker("websocket://0.0.0.0:2346");

$ws_worker->count = 4;

$ws_worker->onMessage = function($connection,$data){
  $connection->send('hello'.$data);
};

Worker::runAll();