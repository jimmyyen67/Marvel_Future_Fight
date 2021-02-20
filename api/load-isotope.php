<?php
require "../func.php";
include "../config.php";

$Charactors = new DB('charactors');
$Isotope = new DB('isotope');
$datas = $Charactors->all();

foreach ($datas as $key => $value) {
    $iso = $Isotope->find(['ch_id' => $value['id']]);
    if (!empty($iso)) {
        $datas[$key]['return_code'] = 0000;
        $datas[$key]['ch_id'] = $iso['ch_id'];
        $datas[$key]['isotope'] = $iso['isotope'];
        $datas[$key]['rank'] = $iso['rank'];
        $datas[$key]['iso_1'] = $iso['iso_1'];
        $datas[$key]['star_1'] = $iso['star_1'];
        $datas[$key]['value_11'] = $iso['value_11'];
        $datas[$key]['value_12'] = $iso['value_12'];
        $datas[$key]['iso_2'] = $iso['iso_2'];
        $datas[$key]['star_2'] = $iso['star_2'];
        $datas[$key]['value_21'] = $iso['value_21'];
        $datas[$key]['value_22'] = $iso['value_22'];
        $datas[$key]['iso_3'] = $iso['iso_3'];
        $datas[$key]['star_3'] = $iso['star_3'];
        $datas[$key]['value_31'] = $iso['value_31'];
        $datas[$key]['value_32'] = $iso['value_32'];
        $datas[$key]['iso_4'] = $iso['iso_4'];
        $datas[$key]['star_4'] = $iso['star_4'];
        $datas[$key]['value_41'] = $iso['value_41'];
        $datas[$key]['value_42'] = $iso['value_42'];
        $datas[$key]['iso_5'] = $iso['iso_5'];
        $datas[$key]['star_5'] = $iso['star_5'];
        $datas[$key]['value_51'] = $iso['value_51'];
        $datas[$key]['value_52'] = $iso['value_52'];
        $datas[$key]['iso_6'] = $iso['iso_6'];
        $datas[$key]['star_6'] = $iso['star_6'];
        $datas[$key]['value_61'] = $iso['value_61'];
        $datas[$key]['value_62'] = $iso['value_62'];
        $datas[$key]['iso_7'] = $iso['iso_7'];
        $datas[$key]['star_7'] = $iso['star_7'];
        $datas[$key]['value_71'] = $iso['value_71'];
        $datas[$key]['value_72'] = $iso['value_72'];
        $datas[$key]['iso_8'] = $iso['iso_8'];
        $datas[$key]['star_8'] = $iso['star_8'];
        $datas[$key]['value_81'] = $iso['value_81'];
        $datas[$key]['value_82'] = $iso['value_82'];
    } else {
        $datas[$key]['return_code'] = 9999;
    }
}

echo json_encode($datas);
exit;
