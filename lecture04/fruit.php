<?php
//定義字典內容
$fruitDic = array(
    "apple" => "蘋果",
    "banana" => "香蕉",
    "coconut" => "椰子",
    "grava" => "芭樂",
    "jake" => "騙子"

);
//使用者查詢
$input = $_POST['fruit-input'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>英文</td>
            <td>中文</td>
        </tr>
        <tr>
            <?php if (in_array($input, $fruitDic)) :  ?> <!--輸入$value查詢是陣列中是否有對應的$key 拋出boolean-->
                <td><?= array_search($input, $fruitDic) ?></td> <!--輸入$value 拋出陣列中的$key -->
                <td><?= $input ?></td>
            <?php elseif (array_key_exists($input, $fruitDic)) : ?> <!--輸入$key 查詢array中是否有對應的$value 拋出
                boolean -->
                <td><?= $input ?></td>
                <td><?= $fruitDic[$input] ?></td>
            <?php else : ?>
                <td colspan="2">查無此水果</td>
            <?php endif; ?> <!--關閉流程判斷/迴圈也要關   -->
        </tr>
    </table>
</body>

</html>