<?php
require_once("config.php");
require_once("db.php");
require_once("common.php");
$sql = "select * from notes";
$db = new Db();
$records = $db->query($sql);

dump($records);
