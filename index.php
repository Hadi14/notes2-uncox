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

    require('main.php');
    echo $_SESSION['uname'];
    $sql = "select * from x_note";
    $db = Db::getInstance();
    $records = $db->first($sql);

    dump($records);

    ?>
</body>

</html>