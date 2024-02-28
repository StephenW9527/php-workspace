<?php
/*
我是註解
註解+1
*/
// echo "<h1>Hello, PHP!!!</h2>";

$number = 10;
$number = $number + 10;

// 用.做字串相加
$name = "Harry";
$age = 18;
echo "My name is: ".$name."<br>";
echo "<br>";
echo "I'm ".$age." years old.";
echo "<br>";
$a = '1';
$b = 1;

// 用.做字串相連  用+做計算相加
$c = $a.$b;
// echo "<br>"+$c+"<br>";  這行會出錯 因字串不能做計算
echo "<br>".'$c='.$c."<br>";
// 數字相加
$d = $a+$b;
/*使用雙引號""會自動顯示變數
而使用單引號''顯示的是變數名稱*/
echo '$c'."的資料型別是:".gettype($c)."<br>";
echo '$d'.'的資料型別是:'.gettype($d)."<br>";
// echo var_dump($c); 變數查詢  string(2)"11" => 字串，2個字元，內容為11
// echo var_dump($d); => int(2) =>型別為整數 值為2


$name2 ='Elsa';
$age2 = 20;
echo "My name is ".$name2.".<br>";
echo "I'm ".$age2."years old.<br>";
echo 'I\'m learning "PHP".';

define("USERNAME","Peter");
echo "<br>".USERNAME;
?>