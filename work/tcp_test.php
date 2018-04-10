<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-03
 * Time: 15:10
 */

use Workerman\Worker;

require_once __DIR__.'/Workerman/Autoloader.php';

Worker::$stdoutFile = '../tmp/stdout.log';

$worker = new Worker('http://0.0.0.0:2345');

$worker->onMessage = function($connection,$data){
  $connection->send('Hello World');
};

//运行Worker
Worker::runAll();