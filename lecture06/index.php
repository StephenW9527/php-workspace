<?php 
$year = date('Y')-1911;
$month = date('m');
$day = date('d');
$hour = date('h');
$minute = date('i');
$second = date('s');

echo "民國".$year."年".$month."月".$day."日".$hour."時".$minute."分".$second."秒";
echo "<br>";

if(date('a')=='am')
{
    $timeSlot = "上午";
}else{
    $timeSlot = "下午";
}
echo "現在是".$timeSlot.$hour."點".$minute."分".$second."秒";

echo "<br>";

?>