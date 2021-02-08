<?php
include "../func.php";
if (!empty($_POST)) {
    $equip = new DB('equipment');
    $data = $equip->find(['ch_id' => $_POST['id']]);

    $data['ch_id'] = $_POST['id'];
    $data['equip_1'] = $_POST['v1'];
    $data['equip_2'] = $_POST['v2'];
    $data['equip_3'] = $_POST['v3'];
    $data['equip_4'] = $_POST['v4'];
    $equip->save($data);
    echo 1;
} else {
    echo 0;
}