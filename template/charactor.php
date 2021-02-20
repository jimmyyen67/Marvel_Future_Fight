<?php
include "../config.php";
$datas = json_decode($_POST['data'], true);
?>
<div class="container">
    <div class="row charactor">
        <?php
        foreach ($datas as $key => $value) {
            // tier字體顏色
            switch ($value['tier']) {
                case '2':
                    $tierBadge = 'bg-primary text-dark';
                    break;
                case '2.5':
                    $tierBadge = 'bg-secondary text-light';
                    break;
                case '3':
                    $tierBadge = 'bg-warning text-dark';
                    break;
            }
            // attribute字體顏色
            switch ($value['attribute']) {
                case '1':
                    $attributeColor = 'badge bg-danger text-light';
                    break;
                case '2':
                    $attributeColor = 'badge bg-primary text-light';
                    break;
                case '3':
                    $attributeColor = 'badge bg-success text-light';
                    break;
                case '4':
                    $attributeColor = 'badge bg-info text-dark';
                    break;
            }
            $value['level'] = ($value['tier'] == 3 || $value['tier'] == 2.5) ? '70' : $value['level'];
            $hitColor = ($value['critical_rate'] == '75.00') ? 'text-danger' : 'text-black-50';
            $rateColor = ($value['critical_rate'] == '200.00') ? 'text-danger' : 'text-black-50';
            $ignoreColor = ($value['ignore_defence'] == '50.00') ? 'text-danger' : 'text-black-50';
            $coolColor = ($value['cool_down'] == '50.00') ? 'text-danger' : 'text-black-50';
        ?>
            <div class="card col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                <div class="card-body">
                    <form>
                        <p class="h5 card-title text-dark"><?= $value['name'] ?></p>
                        <p class="h6 card-subtitle mb-2 text-muted">
                            <select class="<?= $attributeColor ?>" id="attribute<?= $value['id'] ?>">
                                <option value="1" <?= ($value['attribute'] == 1) ? 'selected' : ''; ?>>近戰</option>
                                <option value="2" <?= ($value['attribute'] == 2) ? 'selected' : ''; ?>>爆破</option>
                                <option value="3" <?= ($value['attribute'] == 3) ? 'selected' : ''; ?>>速度</option>
                                <option value="4" <?= ($value['attribute'] == 4) ? 'selected' : ''; ?>>宇宙</option>
                            </select>
                            <select class="badge <?= $tierBadge ?>" id="tier<?= $value['id'] ?>">
                                <option value="3" <?= ($value['tier'] == 3) ? 'selected' : ''; ?>>T3</option>
                                <option value="2.5" <?= ($value['tier'] == 2.5) ? 'selected' : ''; ?>>T2.5</option>
                                <option value="2" <?= ($value['tier'] == 2) ? 'selected' : ''; ?>>T2</option>
                            </select>
                            <select class="badge bg-light text-dark" id="level<?= $value['id'] ?>">
                                <option value="70" <?= ($value['level'] == 70) ? 'selected' : ''; ?>>70</option>
                                <option value="68" <?= ($value['level'] == 68) ? 'selected' : ''; ?>>68</option>
                                <option value="66" <?= ($value['level'] == 66) ? 'selected' : ''; ?>>66</option>
                                <option value="64" <?= ($value['level'] == 64) ? 'selected' : ''; ?>>64</option>
                                <option value="62" <?= ($value['level'] == 62) ? 'selected' : ''; ?>>62</option>
                                <option value="60" <?= ($value['level'] == 60) ? 'selected' : ''; ?>>60</option>
                            </select>
                        </p>
                        <div class="card-info">
                            <!-- 角色數值 start -->
                            <div class="quality p-1 text-black-50">

                                <small>
                                    爆擊機率
                                    <input id="v1<?= $value['id'] ?>" type="text" class="<?= $hitColor ?>" value="<?= $value['critical_hit'] ?>">
                                </small><br>
                                <small>
                                    爆擊傷害
                                    <input id="v2<?= $value['id'] ?>" type="text" class="<?= $rateColor ?>" value="<?= $value['critical_rate'] ?>">
                                </small><br>
                                <small>
                                    無視防禦
                                    <input id="v3<?= $value['id'] ?>" ype="text" class="<?= $ignoreColor ?>" value="<?= $value['ignore_defence'] ?>">
                                </small><br>
                                <small>
                                    技能冷卻
                                    <input id="v4<?= $value['id'] ?>" type="text" class="<?= $coolColor ?>" value="<?= $value['cool_down'] ?>">
                                </small><br>
                            </div>
                            <!-- 角色數值 end -->
                            <div class="line"></div>
                            <!-- 裝備等級 start -->
                            <div class="equipment p-1 text-black-50"">
                                <small>裝備1
                                    <select id="e1<?= $value['id'] ?>">
                                <option value="0">無</option>
                                <option value="25" <?= ($value['equip_1'] == 25) ? 'selected' : ''; ?>>25</option>
                                <option value="24" <?= ($value['equip_1'] == 24) ? 'selected' : ''; ?>>24</option>
                                <option value="23" <?= ($value['equip_1'] == 23) ? 'selected' : ''; ?>>23</option>
                                <option value="22" <?= ($value['equip_1'] == 22) ? 'selected' : ''; ?>>22</option>
                                <option value="21" <?= ($value['equip_1'] == 21) ? 'selected' : ''; ?>>21</option>
                                <option value="20" <?= ($value['equip_1'] == 20) ? 'selected' : ''; ?>>20</option>
                                </select>
                                </small><br>
                                <small>裝備2
                                    <select id="e2<?= $value['id'] ?>">
                                        <option value="0">無</option>
                                        <option value="25" <?= ($value['equip_2'] == 25) ? 'selected' : ''; ?>>25</option>
                                        <option value="24" <?= ($value['equip_2'] == 24) ? 'selected' : ''; ?>>24</option>
                                        <option value="23" <?= ($value['equip_2'] == 23) ? 'selected' : ''; ?>>23</option>
                                        <option value="22" <?= ($value['equip_2'] == 22) ? 'selected' : ''; ?>>22</option>
                                        <option value="21" <?= ($value['equip_2'] == 21) ? 'selected' : ''; ?>>21</option>
                                        <option value="20" <?= ($value['equip_2'] == 20) ? 'selected' : ''; ?>>20</option>
                                    </select>
                                </small><br>
                                <small>裝備3
                                    <select id="e3<?= $value['id'] ?>">
                                        <option value="0">無</option>
                                        <option value="25" <?= ($value['equip_3'] == 25) ? 'selected' : ''; ?>>25</option>
                                        <option value="24" <?= ($value['equip_3'] == 24) ? 'selected' : ''; ?>>24</option>
                                        <option value="23" <?= ($value['equip_3'] == 23) ? 'selected' : ''; ?>>23</option>
                                        <option value="22" <?= ($value['equip_3'] == 22) ? 'selected' : ''; ?>>22</option>
                                        <option value="21" <?= ($value['equip_3'] == 21) ? 'selected' : ''; ?>>21</option>
                                        <option value="20" <?= ($value['equip_3'] == 20) ? 'selected' : ''; ?>>20</option>
                                    </select>
                                </small><br>
                                <small>裝備4
                                    <select id="e4<?= $value['id'] ?>">
                                        <option value="0">無</option>
                                        <option value="25" <?= ($value['equip_4'] == 25) ? 'selected' : ''; ?>>25</option>
                                        <option value="24" <?= ($value['equip_4'] == 24) ? 'selected' : ''; ?>>24</option>
                                        <option value="23" <?= ($value['equip_4'] == 23) ? 'selected' : ''; ?>>23</option>
                                        <option value="22" <?= ($value['equip_4'] == 22) ? 'selected' : ''; ?>>22</option>
                                        <option value="21" <?= ($value['equip_4'] == 21) ? 'selected' : ''; ?>>21</option>
                                        <option value="20" <?= ($value['equip_4'] == 20) ? 'selected' : ''; ?>>20</option>
                                    </select>
                                </small>
                                <div>
                                    <input style="margin-left:auto;" type="reset" class="btn btn-sm btn-link text-danger" value="reset">
                                    <input style="margin-left:auto;" class="btn btn-sm btn-link text-success" type="button" onclick="editCharactor(<?= $value['id'] ?>)" value="更新">
                                </div>
                    </form>
                </div>
                <!-- 裝備等級 end -->
            </div>
    </div>
</div>
<?php
        }
?>
</div>
</div>