<?
require('main.php');
$db = Db::getInstance();
$u = $_POST['uname'];
$p = $_POST['pass'];
$cp = $_POST['cpass'];

$sql = "select * from users where username='$u' and password='$p'";
$record = $db->query($sql);

if ($u == "" || $p == "" || $cp == "") {
    echo "Plase Fill All Boxes.!!!";
} else if ($p != $cp) {
    echo "Plase type the same Password and Confirm Password.!!!";
}






// if ($record == null) {
//     header("Location: fail.php");
// } else {
//     header("Location: success.php");
// }