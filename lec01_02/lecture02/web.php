<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./web.css">
</head>
<body>


    
    <form action="" method="post">
        <h3>用餐調查</h3>
        <p>
            <label for="user-name">名稱:</label>
            <input type="text" name="user-name" required placeholder="請輸入使用者名稱">
        </p>
        <p>
            <label for="user-email">Email:</label>
            <input type="email" name="user-email" required placeholder="請輸入信箱">
        </p>
        <p>
             <label for="password">密碼</label>
             <input type="password" name="password" required>
        </p>
        <p>
            <label for="gender">性別</label>
            <input type="radio" name="gender" value="male" checked>男性
            <input type="radio" name="gender" value="female">女性
        </p>
        <p>
            <label for="food">想吃甚麼</label>
            <input type="checkbox" name="food" id="shusi">壽司
            <input type="checkbox" name="food" id="hotpot">火鍋
            <input type="checkbox" name="food" id="bbq">燒烤
            <input type="checkbox" name="food" id="pizza">披薩
        </p>
        <p>
            <input type="submit" value="送出">
        </p>
    </form>
    
</body>
</html>