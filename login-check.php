<?
require('main.php');
$db = Db::getInstance();
$u = $_POST['uname'];
$p = $_POST['pass'];

$sql = "select * from users where username='$u' and password='$p'";
$record = $db->query($sql);
if ($record == null) {
    header("Location: fail.php");
} else {
    header("Location: success.php");
}
