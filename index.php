<!DOCTYPE html>
<html lang="en">
<?
require('main.php');
$isset = isset($_SESSION['uname']);
if ($isset) {
    $u = $_SESSION['uname'];
} else {
    $u = "کاربر میهمان";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="header">
        <span> سلام</span>
        <strong> <?= $u ?> </strong>
        <span>
            عزیز خوش آمدید.
        </span>
        <!-- <a href="logout.php">خروج</a> -->
        <?
        if ($isset) {
            echo '<a href="logout.php">خروج</a>';
        } else {
            echo '<a href="login.php">ورود</a>';
        } ?>
    </div>
    <?
    if ($isset) {
        $u = $_SESSION['uname'];
        $sql = "select * from x_note where username='$u'";
        $db = Db::getInstance();
        $records = $db->query($sql);
    ?>

        <table>
            <tr>
                <th>کد نت</th>
                <th>عنوان نت</th>
                <th>متن نت</th>
                <th>زمان نت</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            <?
            if ($records == null) {
                $records = array();
            }
            foreach ($records as $row) {
                $t = $row['noteTitle'];

            ?>
                <tr>
                    <td><?= $row['noteID'] ?></td>
                    <td><?= $row['noteTitle'] ?></td>
                    <td><?= $row['noteText'] ?></td>
                    <td><?= $row['noteTime'] ?></td>
                    <td><a href="edit.php?id=<?= $row['noteID'] ?>&title=<?= $t ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="deleteNote.php?id=<?= $row['noteID'] ?>"><i class="bi bi-calendar-x"></i></a></td>
                </tr>
            <? } ?>
        </table><br>
        <div class="insertdiv"> <a class="insertrecord" href="insertNote.php">درج نت</a></div>
    <?
    } else {
        echo "<h3>برای استفاده از تمامی بخش های وب سایت وارد سایت شوید<h3>";
    }
    ?>
</body>

</html>