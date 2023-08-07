<?php
require_once("config.php");
require_once("db.php");
require_once("common.php");
$sql = "select * from x_note";
$db = new Db();
$records = $db->first($sql);

dump($records);
