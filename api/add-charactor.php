<?php
require "../func.php";
include "../config.php";

$data = array();

if (!empty($_POST['data'])) {
    parse_str($_POST['data'], $data);
    $db = new DB('charactors');
    $db->save($data);
    echo 1;
} else {
    echo 0;
}
exit;