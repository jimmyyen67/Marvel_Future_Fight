<?php
include_once "../func.php";

$Isotope = new DB('isotope');
if (!empty($_POST)) {

    parse_str($_POST['data'], $iso);

    if (isset($iso['id'])) {
        // 首次儲存資料
        $iso['ch_id'] = $iso['id'];
        unset($iso['id']);
        $Isotope->save($iso);
        echo 1;
        exit;
    } elseif (isset($iso['ch_id'])) {
        // 更新同位素資料
        $data = $Isotope->find(['ch_id' => $iso['ch_id']]);
        $data['isotope'] = $iso['isotope'];
        $data['rank'] = $iso['rank'];
        $data['iso_1'] = $iso['iso_1'];
        $data['star_1'] = (isset($iso['star_1'])) ? 1 : 0;
        $data['value_11'] = $iso['value_11'];
        $data['value_12'] = $iso['value_12'];
        $data['iso_2'] = $iso['iso_2'];
        $data['star_2'] = (isset($iso['star_2'])) ? 1 : 0;
        $data['value_21'] = $iso['value_21'];
        $data['value_22'] = $iso['value_22'];
        $data['iso_3'] = $iso['iso_3'];
        $data['star_3'] = (isset($iso['star_3'])) ? 1 : 0;
        $data['value_31'] = $iso['value_31'];
        $data['value_32'] = $iso['value_32'];
        $data['iso_4'] = $iso['iso_4'];
        $data['star_4'] = (isset($iso['star_4'])) ? 1 : 0;
        $data['value_41'] = $iso['value_41'];
        $data['value_42'] = $iso['value_42'];
        $data['iso_5'] = $iso['iso_5'];
        $data['star_5'] = (isset($iso['star_5'])) ? 1 : 0;
        $data['value_51'] = $iso['value_51'];
        $data['value_52'] = $iso['value_52'];
        $data['iso_6'] = $iso['iso_6'];
        $data['star_6'] = (isset($iso['star_6'])) ? 1 : 0;
        $data['value_61'] = $iso['value_61'];
        $data['value_62'] = $iso['value_62'];
        $data['iso_7'] = $iso['iso_7'];
        $data['star_7'] = (isset($iso['star_7'])) ? 1 : 0;
        $data['value_71'] = $iso['value_71'];
        $data['value_72'] = $iso['value_72'];
        $data['iso_8'] = $iso['iso_8'];
        $data['star_8'] = (isset($iso['star_8'])) ? 1 : 0;
        $data['value_81'] = $iso['value_81'];
        $data['value_82'] = $iso['value_82'];
        $Isotope->save($data);
        echo 2;
        exit;
    }
}
echo 0;
