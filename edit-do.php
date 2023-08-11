<?
require_once('main.php');

$db = Db::getInstance();
$un = $_GET['id'];
$newtitle = $_POST['notet'];
$db->modify("update x_note set noteTitle='$newtitle' where noteID='$un'");

// echo $newtitle;
// echo "<br>";
// echo $un;
// echo $_GET['id'];


header("Location: index.php");
