<?
require_once('main.php');
$db = Db::getInstance();
$un = $_GET['id'];
$db->modify("delete from x_note where noteID='$un'");
header("Location: index.php");
