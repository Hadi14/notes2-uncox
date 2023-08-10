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
    $msg = "<h4>تبریک شما به سیستم وارد شدید.</h4> <br> <span>برای ورود به صفحه اصلی<a href='index.php'> اینجا </a>کلیک کنید</span>";
    require_once('success.php');
    // header("Location: success.php");
    $_SESSION['uname'] = $u;
}
