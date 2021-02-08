<?php
require "../func.php";
include "../config.php";

$charactors = new DB('charactors');
$datas = $charactors->all();
$Equip = new DB('equipment');

foreach ($datas as $key => $array) {
    $equip = $Equip->find(['ch_id' => $array['id']]);
    if (!empty($equip)) {
        $datas[$key]['equip_1'] = $equip['equip_1'];
        $datas[$key]['equip_2'] = $equip['equip_2'];
        $datas[$key]['equip_3'] = $equip['equip_3'];
        $datas[$key]['equip_4'] = $equip['equip_4'];
    } else {
        $datas[$key]['equip_1'] = '';
        $datas[$key]['equip_2'] = '';
        $datas[$key]['equip_3'] = '';
        $datas[$key]['equip_4'] = '';
    }
}

echo json_encode($datas);
exit;