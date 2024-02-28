<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>output</title>
</head>
<body>
    <?php
    $work['bao']=array($_POST['bm1'],$_POST['bm2'],$_POST['bm3']);
    $work['hua']=array($_POST['hm1'],$_POST['hm2'],$_POST['hm3']);
    
    $sum1 = $work['bao'][0]+$work['bao'][1]+$work['bao'][2];
    $sum2 = $work['hua'][0]+$work['hua'][1]+$work['hua'][2];
    
    echo "這季阿寶的總業績是 ".$sum1."千元!<br>";
    echo "這季阿花的總業績是 ".$sum2."千元!<br>";

    
    $delta =  $sum1 - $sum2;
    
    if($delta>0){
     
        echo "<br><span style='color: red;'>這季阿寶的表現比較棒! </span>";
        
    }else{

        echo "<br><span style='color: red;'>這季阿花的表現比較棒! </span>";

    };

    ?>
    
</body>
</html>