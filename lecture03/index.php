<?php 
//array

// $colors = array("blue","green","white");
// echo $colors[1];


//逐步新增陣列內物件 不用一開始寫死
// $colors[0] = "Red";
// $colors[1] = "Yellow";
// $colors[2] = "Purple";


//關聯式陣列 KEY=>VALUE 不再使用index
$products = array("iPhone7"=>24500,"iPhone8"=>28500);
// echo $products["iPhone8"];
$products["iPhone9"] = 32500; //新增物件

//將array包含型別 完整印出來
// var_dump($products);
// echo "<br>";

// //印出array的key-value版本
// print_r($products);

$capitals["Japan"] = "Tokyo";
$capitals["France"] = "Paris";
$capitals["Germany"] = "Berlin";

$input = $_GET["country-input"];

echo $input."的首都為:".$capitals[$input];



// echo "查詢結果: ".$input."的首都為".$capitals[$input];
// $name =  $_GET["name"];
// $id   =  $_GET["id"]; 
// echo "名字是:".$name."<br>";
// echo "ID是:".$id;

// var_dump($_GET);  

//get 或是 post 都是將資料 儲存成String的關聯式陣列 

?>