<?php
//陣列相關的內建函數

//排序
// $scores = array(
//     "Cindy"=>80,
//     "Adam"=>76,
//     "Gogoro"=>95,
//     "Toyota"=>80,
//     "Einsten"=>50
// );

// // ksort($scores);  //依照key(字母先後/數值)排序
// arsort($scores);  //依照value值排序
// $i = 0;

// foreach($scores as  $name => $score){
//     echo "第".++$i."名是".$name."考了".$score."<br>";
// }


//建立指定範圍值的陣列
// $numbers = range(0,10);  //印出0~10 共11個值
// print_r($numbers);

// $numbers = range(0,100,10); //0~100 間格10印出一次值 //0,10,20,30,40...,100 共11個值 

//英文字母範圍的陣列
// $strings = range('a','p');   //回傳一個陣列 陣列元素型別為string
// // var_dump($strings);
// shuffle($strings);
// echo implode("",$strings);


//隨機產生字串

$number = range(0,9);
$lowercase =  range('a','z');
$uppercase  = range('A','Z');

$charArray =  array_merge($number,$lowercase,$uppercase);
shuffle($charArray);

//設定我們要的字元個數(起始索引,要取的個數)
$charArray = array_slice($charArray,0,10);

//組成字串
$fileName = implode("",$charArray);
echo $fileName;
?>