<?php 
$redis = new Redis();

$redis->connect('127.0.0.1',6379);

$v="126000,1000";

$redis->rpush("mylist",$v);

?>