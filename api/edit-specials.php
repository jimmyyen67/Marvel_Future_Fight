<?php
include "../func.php";

$Special = new DB('specials');
if (!empty($_POST)) {
    $id = $_POST['ch_id'];
    $data = $Special->find(['ch_id' => $id]);
    if (empty($data)) {
        // 新增
        $data['ch_id'] = $_POST['ch_id'];
        $data['special'] = $_POST['special'];
        $data['ignore'] = (isset($_POST['ignore'])) ? 1 : 0;
        if (isset($_POST['value-1'])) {
            $data['value_1'] = $_POST['value-1'];
        }
        if (isset($_POST['value-2'])) {
            $data['value_2'] = $_POST['value-2'];
        }
        if (isset($_POST['value-3'])) {
            $data['value_3'] = $_POST['value-3'];
        }
        $data['hp'] = (isset($_POST['hp'])) ? $_POST['hp'] : 0;
        $data['sec'] = (isset($_POST['sec'])) ? $_POST['sec'] : 0;
        $data['percent'] = (isset($_POST['percent'])) ? $_POST['percent'] : 0;
        $data['power'] = (isset($_POST['power'])) ? $_POST['power'] : 0;

        $Special->save($data);
        echo 1;
        exit;
    } else {
        // 更新
        $data['special'] = $_POST['special'];
        $data['ignore'] = (isset($_POST['ignore'])) ? 1 : 0;
        if (isset($_POST['value-1'])) {
            $data['value_1'] = $_POST['value-1'];
        }
        if (isset($_POST['value-2'])) {
            $data['value_2'] = $_POST['value-2'];
        }
        if (isset($_POST['value-3'])) {
            $data['value_3'] = $_POST['value-3'];
        }
        $data['hp'] = (isset($_POST['hp'])) ? $_POST['hp'] : 0;
        $data['sec'] = (isset($_POST['sec'])) ? $_POST['sec'] : 0;
        $data['percent'] = (isset($_POST['percent'])) ? $_POST['percent'] : 0;
        $data['power'] = (isset($_POST['power'])) ? $_POST['power'] : 0;

        $Special->save($data);
        echo 2;
        exit;
    }
}
echo 0;
