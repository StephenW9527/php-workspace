<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績計算結果</title>
</head>
<body>
    <?php
        $mandarin = $_POST['mandarin'];
        $english  = $_POST['english'];
        $math = $_POST['math'];
        $sum = ($mandarin + $english + $math);
        $avg = number_format($sum/3,2);
    
        echo "國文成績: ".$mandarin."<br>";
        echo "英文成績: ".$english."<br>";
        echo "數學成績: ".$math."<br>";
        echo "總分為: ".$sum."<br>";
        echo "平均為: ".$avg."<br>"
    ?>
    
</body>
</html>