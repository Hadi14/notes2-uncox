<?
require('main.php');
$db = Db::getInstance();
$u = $_POST['uname'];
$p = $_POST['pass'];
$cp = $_POST['cpass'];


$sql = "select * from users where username='$u' and password='$p' ";
$record = $db->query($sql);

if ($u == "" || $p == "" || $cp == "") {
    echo "Plase Fill All Boxes.!!!";
} else if ($p != $cp) {
    echo "Plase type the same Password and Confirm Password.!!!";
} else if ($record != null) {
    echo "You Already Registerd.!!!";
} else {
    $sql = "insert into users (username, password,level) values ('$u','$p','2') ";
    $res = $db->insert($sql);
    if ($res) {
        echo "Thankyou You Registeded.!!!";
        echo "برای ورود  "  . "<a href='login.php'>اینجا</a>" . " کلیک کنید ";
    } else {
        echo "Register in Error.!!!";
    }
}
