<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link rel="stylesheet" href="./home.css">
</head>
<body>
<?php

$fruit = array(
    'apple',
    'orange',
    'watermelon',
    'strawberry',
    'pineapple'
);

$input = $_POST['fruit'];
switch($input){
    case $fruit[0]:
        echo "<table>
                <tr>
                    <td>英文</td>
                    <td>中文</td>
                </tr>    
                <tr>
                    <td>".$fruit[0]."</td>
                    <td>蘋果</td>
                </tr>
              </table>";
        
        break;
    case $fruit[1]:
        echo $fruit[1].":橘子";
        break;
    case $fruit[2]:
        echo $fruit[2].":西瓜";
        break;
    case $fruit[3]:
        echo $fruit[3].":草莓";
        break;
    case $fruit[4]:
        echo $fruit[4].":鳳梨";
        break;
    default:
        echo "字典沒有收錄  <span style='color: red;'>  ".$input."</span>  這個單字。";
        break;               
}



// $fruit = array(
//     'apple'=>'蘋果',
//     'orange'=>'橘子',
//     'watermelon'=>'西瓜',
//     'strawberry'=>'草莓',
//     'pineapple'=>'鳳梨'
// );

// $input = $_POST['fruit'];
// foreach($fruit as $index => $key){
    
// switch($input){
//     case $index:
//         echo $index.'的中文是'.$key;
//         break;
//     case $index:
//         echo $index.'的中文是'.$key;
//         break;
//     case $index:
//         echo $index.'的中文是'.$key;
//         break;
//     case $index:
//         echo $index.'的中文是'.$key;
//         break;
//     case $index:
//         echo $index.'的中文是'.$key;
//         break;
//     default:
//         echo "字典沒有收錄 ".$input." 這個單字。";
//         break;               
// }

// }

?>    

</body>
</html>