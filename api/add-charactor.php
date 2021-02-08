<?php
require "../func.php";
include "../config.php";

$data = array();

if (!empty($_POST['data'])) {
    parse_str($_POST['data'], $data);
    $charactors = new DB('charactors');
    $charactors->save($data);
    echo 1;
} else {
    echo 0;
}
exit;