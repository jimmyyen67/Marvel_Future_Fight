<?php
require "../func.php";
include "../config.php";

$Charactors = new DB('charactors');
$Specials = new DB('specials');
$datas = $Charactors->all();

foreach ($datas as $key => $value) {
    $special = $Specials->find(['ch_id' => $value['id']]);
    if (!empty($special)) {
        $datas[$key]['special'] = $special['special'];
        $datas[$key]['ignore'] = $special['ignore'];
        $datas[$key]['value_1'] = $special['value_1'];
        $datas[$key]['value_2'] = $special['value_2'];
        $datas[$key]['value_3'] = $special['value_3'];
        $datas[$key]['hp'] = $special['hp'];
        $datas[$key]['sec'] = $special['sec'];
        $datas[$key]['percent'] = $special['percent'];
        $datas[$key]['power'] = $special['power'];
    } else {
        $datas[$key]['special'] = 999;
        $datas[$key]['value1'] = 'null';
        $datas[$key]['value2'] = 'null';
        $datas[$key]['value3'] = 'null';
        $datas[$key]['value4'] = 'null';
    }
}

echo json_encode($datas);
exit;
