<?php
include "../func.php";
if (!empty($_POST)) {
    $db = new DB('charactors');
    $data = $db->find($_POST['id']);

    $data['critical_hit'] = $_POST['v1'];
    $data['critical_rate'] = $_POST['v2'];
    $data['ignore_defence'] = $_POST['v3'];
    $data['cool_down'] = $_POST['v4'];

    $db->save($data);
    echo 1;
} else {
    echo 0;
}