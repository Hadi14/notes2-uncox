<?
require_once('main.php');
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
$time = $_POST['time'];
$un = $_SESSION['uname'];
$db = Db::getInstance();

$db->insert("insert into x_note (noteID,noteTitle,noteText,noteTime,username) values  ('$id','$title','$text','$time','$un')");
header("Location: index.php");
