<?php
include "../func.php";
if (!empty($_POST)) {
    $charactors = new DB('charactors');
    $data = $charactors->find($_POST['id']);

    $data['critical_hit'] = $_POST['v1'];
    $data['critical_rate'] = $_POST['v2'];
    $data['ignore_defence'] = $_POST['v3'];
    $data['cool_down'] = $_POST['v4'];

    $charactors->save($data);
    echo 1;
} else {
    echo 0;
}