<?
require('main.php');
$db = Db::getInstance();
$u = $_POST['uname'];
$p = $_POST['pass'];
$cp = $_POST['cpass'];


$sql = "select * from users where username='$u' and password='$p' ";
$record = $db->query($sql);

if ($u == "" || $p == "" || $cp == "") {
    // echo "Plase Fill All Boxes.!!!";
    $msg = "Plase Fill All Boxes.!!!";
    require_once('fail.php');
} else if ($p != $cp) {
    $msg = "Plase type the same Password and Confirm Password.!!!";
    require_once('fail.php');
} else if ($record != null) {
    $msg = "You Already Registerd.!!!";
    require_once('fail.php');
} else {
    $sql = "insert into users (username, password,level) values ('$u','$p','2') ";
    $res = $db->insert($sql);
    if ($res) {
        $msg = "Thankyou You Registeded.!!! <br>";
        $msg .= "برای ورود  "  . "<a href='login.php'>اینجا</a>" . " کلیک کنید ";
        require_once('fail.php');
    } else {
        $msg = "Register in Error.!!!";
        require_once('fail.php');
    }
}
