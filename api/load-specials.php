<?php
require "../func.php";
include "../config.php";

$Charactors = new DB('charactors');
$Specials = new DB('specials');
$datas = $Charactors->all();

foreach ($datas as $key => $value) {
    $special = $Specials->find($value['id']);
    if (!empty($special)) {
        $datas[$key]['special'] = $special['special'];
        $datas[$key]['value1'] = $special['value1'];
        $datas[$key]['value2'] = $special['value2'];
        $datas[$key]['value3'] = $special['value3'];
        $datas[$key]['value4'] = $special['value4'];
    } else {
        $datas[$key]['special'] = 000;
        $datas[$key]['value1'] = 'null';
        $datas[$key]['value2'] = 'null';
        $datas[$key]['value3'] = 'null';
        $datas[$key]['value4'] = 'null';
    }
}

echo json_encode($datas);
exit;