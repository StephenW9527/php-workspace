<?php
// //定義function 
// function sum($x,$y){

//     $result = $x + $y;
//     return $result;

// };
// //呼叫function
// //但必須要有一個變數來接function的執行結果
// $result = sum(5,9);
// echo $result;


//定義一個幫商品打折的函數
// function discount($price,$percent){
//     $result = $price*$percent;
//      return $result;
// };

// //方法1
// // $result = discount(50000,0.5);
// // echo $result;


// //方法2 也可以直接echo function
// echo discount(1000,0.6);  

//計算陣列價格打折的函數

// function discountForArray($priceArr, $diccount){
//     $discountedPrice = array();
//     foreach($priceArr as $key => $price){
//         $discountedPrice[$key] = $price * $diccount;
//     };
//     return $discountedPrice;
// };
//     $product = array(1000,200,50000,20,1020);
//     $discountedPrice = discountForArray($product, 0.5);
    
//     echo implode(",",$discountedPrice);   //implode() 內建函數 回傳陣列value 並用符號格開的字串格式
//全域變數Global
// $a = 5;
// function printA(){
//     //區域變數Local
//     echo $a;

// }

// printA();


// $a=100;
// $b=125;

// function sum(){
//     $GLOBALS['b'] += $GLOBALS['a'];
//     return $GLOBALS['b'];
// }
// // $result = sum();
// // echo $result;

// echo $b."<br>";
// sum();
// echo $b;


//隨機取一個數字
$randomNumber = rand(0,9);
echo $randomNumber;

?>