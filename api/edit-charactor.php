<?php
include "../func.php";

if (!empty($_POST)) {
    $Charactor = new DB('charactors');
    $Equipment = new DB('equipment');
    // 角色數值
    $dataC = $Charactor->find($_POST['id']);
    $dataC['critical_hit'] = $_POST['v1'];
    $dataC['critical_rate'] = $_POST['v2'];
    $dataC['ignore_defence'] = $_POST['v3'];
    $dataC['cool_down'] = $_POST['v4'];
    $Charactor->save($dataC);
    // 角色裝備
    $dataE = $Equipment->find(['ch_id' => $_POST['id']]);
    $dataE['ch_id'] = $_POST['id'];
    $dataE['equip_1'] = $_POST['e1'];
    $dataE['equip_2'] = $_POST['e2'];
    $dataE['equip_3'] = $_POST['e3'];
    $dataE['equip_4'] = $_POST['e4'];
    $Equipment->save($dataE);
    echo 1;
} else {
    echo 0;
}
