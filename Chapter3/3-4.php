<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>驗證結果</title>
</head>
<body>
    <?php
    $allan = array('allan', 1234);
    $bill = array('bill', 5678);
    $user =  array($_POST['id'], $_POST['pw']); 
    
    if($user[0]==$allan[0] && $user[1]==$allan[1]){
       
        echo $allan[0].',登入成功！<br>';
        echo "<a href='./3-4.html'>登出</a>";
    }
    elseif($user[0]==$bill[0] && $user[1]==$bill[1]){
        echo $bill[0].",登入成功！<br>";
        echo "<a href='./3-4.html'>登出</a>";
    }
    else{
        echo "帳號或密碼有誤，請重新登入。<br>";
        echo "<a href='./3-4.html'>返回上頁</a>";
    }
    
    ?>

</body>
</html>