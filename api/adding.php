<?php
include "/base.php";
if (isset($_POST['data']) && !empty($_POST['data'])) {
    $data = [];
    parse_str($_POST['data'], $data);
    $db = new DB('charactors');
    $db->save($data);
    echo 1;
} else {
    echo 0;
}
