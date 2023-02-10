<?php 
$redis = new Redis();

$redis->connect('127.0.0.1',6379);

$shuliang = $redis->llen('mylist');
echo $shuliang;

$value = $redis->lpop('mylist');
 
if($value){
 
 echo "出队的值".$value."<br>";

$weizhi=strpos($value,",");



$qian=substr($value, 0,$weizhi);
$hou=substr($value,$weizhi+1);

echo $qian."<br>";
echo $hou."<br>";

 
 
}else{
 
  echo "出队完成";
 
}
  
?>