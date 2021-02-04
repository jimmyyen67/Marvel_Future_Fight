<?php
require "../func.php";
include "../config.php";

$db = new DB('charactors');
$rows = $db->all();

echo json_encode($rows);
exit;