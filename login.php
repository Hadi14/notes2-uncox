<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="base.css">
</head>

<body>
    <?
    if (isset($_SESSION['uname'])) {
        $msg = "شما قبلا وارد سیستم شده اید " . "<a href='index.php'> اینجا</a>" . "برای ورود کلیک کنید " . "<br>" . "برای خارج شدن کلیک کنید" . "<a href='logout.php'>خروج</a>";
        require_once('success.php');
    }
    ?>
    <div class="tac">
        <img style="width: 200px;" src="images/notes.png" alt=""><br>
        <form action="login-check.php" method="post">
            <label for="">UserName</label>
            <input name="uname" type="text"><br><br>
            <label for="">Password</label>
            <input name="pass" type="password"><br><br>
            <input class="btnblue" type="submit" value="ُSend"><br><br>
            <a href="register.php">Create New Account</a>
    </div>

</body>

</html>