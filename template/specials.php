<?php
include "../config.php";
$datas = json_decode($_POST['data'], true);
// echo "<pre>".print_r($datas)."</pre>";
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($datas as $key => $value) {
        ?>
            <div class="card col-sm-12 col-md-4 col-lg-3 col-xxl-2">
                <div class="card-body">
                    <p class="h5 card-title text-dark"><?= $value['name'] ?></p>
                    <div class="card-info">
                        <!-- 特殊裝備 start -->
                        <div class="special text-black-50 w-100">
                            <?php if ($value['special'] == 999) { ?>
                                <form action"#" method="post" class="special-form">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1"><input type="text" placeholder="尚未選擇" disabled></div>
                                        <div class="value-2"><input type="text" placeholder="尚未選擇" disabled></div>
                                        <div class="value-3"><input type="text" placeholder="尚未選擇" disabled></div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="reset" class="btn btn-sm btn-link text-dark" value="Reset">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Save">
                                        </div>
                                    </small>
                                </form>
                            <?php } elseif ($value['special'] == 7) {
                                // 權威的CTP
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7" selected>權威的CTP</option>
                                        </select>
                                        <div class="value-1"><input type="checkbox" checked> <u>破防</u>免疫</div>
                                        <div class="value-2">爆擊傷害+<input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-3">HP<input class='center' type='text' name='hp' value="<?= $value['hp'] ?>" style='width:1.8rem;'>%<u>無敵</u>(<input class='center' name='sec' type='text' value="<?= $value['sec'] ?>" style='width:1rem;'>)秒</div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            } elseif ($value['special'] == 4) {
                                // 破壞的CTP
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4" selected>破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1"><input type="checkbox" checked> <u>破防</u>免疫</div>
                                        <div class="value-2">爆擊傷害+<input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-3"><input class='center' type='text' name='percent' value="<?= $value['percent'] ?>" style='width:1.5rem;'>% 1次增傷<input class='center' name='power' type='text' value="<?= $value['power'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            } elseif ($value['special'] == 1) {
                                //  超越的CTP
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1" selected>超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1">所有攻擊力+<input type='text' class='center' name='value-1' value="<?= $value['value_1'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-2">無視迴避<input class='center' type='text' name='value-2' value="<?= $value['value_2'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-3">HP<input class='center' type='text' name='hp' value="<?= $value['hp'] ?>" style='width:1.5rem;'>%<u>無敵</u>(<input class='center' name='sec' type='text' value="<?= $value['sec'] ?>" style='width:1rem;'>)秒</div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            } elseif ($value['special'] == 2) {
                                // 激動的CTP
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2" selected>激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1">無視迴避<input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-2">爆擊傷害+<input class='center' type='text' name='value-2' value="<?= $value['value_2'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-3"><input class='center' type='text' name='percent' value="<?= $value['percent'] ?>" style='width:1.5rem;'>% 1次增傷<input class='center' name='power' type='text' value="<?= $value['power'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            } elseif ($value['special'] == 6) {
                                // 製鍊的CTP
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6" selected>製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1">HP +<input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-2">回復率 +<input class='center' type='text' name='value-2' value="<?= $value['value_2'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-3">HP<input class='center' type='text' name='hp' value="<?= $value['hp'] ?>" style='width:1.5rem;'>% 阻擋<input class='center' name='power' type='text' value="<?= $value['power'] ?>" style='width:1rem;'>打擊數</div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            } elseif ($value['special'] == 5) {
                                //再生的CTP
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5" selected>再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1"><input type='checkbox' name='ignore' value='1' checked> <span><u>破防</u>免疫</span></div>
                                        <div class="value-2">HP +<input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-3">HP<input class='center' type='text' name='hp' value="<?= $value['hp'] ?>" style='width:1.5rem;'>% 施放<input class='center' name='power' type='text' value="<?= $value['power'] ?>" style='width:1.5rem;'>%護盾</div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            } elseif ($value['special'] == 3) {
                                // 狂怒的CTP
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0">終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3" selected>狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1">爆擊率 +<input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-2">迴避率 +<input class='center' type='text' name='value-2' value="<?= $value['value_2'] ?>" style='width:2.4rem;'>%</div>
                                        <div class="value-3">無視傷害減少+<input class='center' type='text' name='value-3' value="<?= $value['value_3'] ?>" style='width:1.5rem;'>%</div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            } elseif ($value['special'] == 0) {
                                // 終極高塔
                            ?>
                                <form action"#" method="post" class="special-form-edit">
                                    <small>
                                        <select data-id="<?= $value['id'] ?>" class="special-select form-select form-select-sm" name="special">
                                            <option value="000">請選擇...</option>
                                            <option value="0" selected>終極高塔</option>
                                            <option value="1">超越的CTP</option>
                                            <option value="2">激動的CTP</option>
                                            <option value="3">狂怒的CTP</option>
                                            <option value="4">破壞的CTP</option>
                                            <option value="5">再生的CTP</option>
                                            <option value="6">製鍊的CTP</option>
                                            <option value="7">權威的CTP</option>
                                        </select>
                                        <div class="value-1">
                                            <?php if ($value['value_1'] == '破防免疫') {
                                            ?>
                                                <input type="checkbox" checked> <input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style="text-align:left;width:8rem;">
                                            <?php
                                            } else {
                                            ?>
                                                <input class='center' type='text' name='value-1' value="<?= $value['value_1'] ?>" style="text-align:left;">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="value-2"><input class='center' type='text' name='value-2' value="<?= $value['value_2'] ?>" style="text-align:left;"></div>
                                        <div class="value-3"><input class='center' type='text' name='value-3' value="<?= $value['value_3'] ?>" style="text-align:left;"></div>
                                        <div class="center" stlye="position:relative;bottom:0;">
                                            <input type="hidden" name="ch_id" value="<?= $value['id'] ?>">
                                            <input type="button" class="btn btn-sm btn-link text-dark" value="Reset" onclick="specials()">
                                            <input type="submit" class="btn btn-sm btn-link text-success" value="Update">
                                        </div>
                                    </small>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- 特殊裝備 end -->
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<script>
    $(function() {

        $(".special-form-edit").on('submit', (e) => {
            e.preventDefault();
            let form = e.currentTarget;
            $.post('api/edit-specials.php', $(form).serialize(), (result) => {
                console.log(result);
                if (result == 2) {
                    alert('【更新】資料上傳成功。');
                    specials();
                } else {
                    alert('【更新】操作有誤，請重新再試一次。');
                }
            })
        })


        $(".special-select").on('change', (e) => {
            let target = e.currentTarget;
            let CTP = $(target).val();
            switch (CTP) {
                case '0':
                    // 終極高塔
                    console.log("終極高塔");
                    var input1 = "<input type='text' class='center' name='value-1' style='text-align:left;'>";
                    var input2 = "<input class='center' type='text' name='value-2' style='text-align:left;'>";
                    var input3 = "<input class='center' type='text' name='value-3' style='text-align:left;'>";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
                case '1':
                    // 超越的CTP
                    console.log("超越的CTP");
                    var input1 = "所有攻擊力+<input type='text' class='center' name='value-1' style='width:2.4rem;'>%";
                    var input2 = "無視迴避<input class='center' type='text' name='value-2' style='width:2.4rem;'>%";
                    var input3 = "HP<input class='center' type='text' name='hp' style='width:1.5rem;'>%<u>無敵</u>(<input class='center' name='sec' type='text' style='width:1rem;'>)秒";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
                case '2':
                    // 激動的CTP
                    console.log("激動的CTP");
                    var input1 = "無視迴避<input class='center' type='text' name='value-1' style='width:2.4rem;'>%";
                    var input2 = "爆擊傷害+<input class='center' type='text' name='value-2' style='width:2.4rem;'>%";
                    var input3 = "<input class='center' type='text' name='percent' style='width:1.5rem;'>% 1次增傷<input class='center' name='power' type='text' style='width:2.4rem;'>%";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
                case '3':
                    // 狂怒的CTP
                    console.log("狂怒的CTP");
                    var input1 = "爆擊率 +<input class='center' type='text' name='value-1' style='width:2.4rem;'>%";
                    var input2 = "迴避率 +<input class='center' type='text' name='value-2' style='width:2.4rem;'>%";
                    var input3 = "無視傷害減少+<input class='center' type='text' name='value-3' style='width:1.5rem;'>%";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
                case '4':
                    // 破壞的CTP
                    console.log("破壞的CTP");
                    var input1 = "<input type='checkbox' name='ignore' value='1' checked> <span><u>破防</u>免疫</span>";
                    var input2 = "爆擊傷害+<input class='center' type='text' name='value-1' style='width:2.4rem;'>%";
                    var input3 = "<input class='center' type='text' name='percent' style='width:1.5rem;'>% 1次增傷<input class='center' name='power' type='text' style='width:2.4rem;'>%";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
                case '5':
                    // 再生的CTP
                    console.log("再生的CTP");
                    var input1 = "<input type='checkbox' name='ignore' value='1' checked> <span><u>破防</u>免疫</span>";
                    var input2 = "HP +<input class='center' type='text' name='value-1' style='width:2.4rem;'>%";
                    var input3 = "HP<input class='center' type='text' name='hp' style='width:1.5rem;'>% 施放<input class='center' name='power' type='text' style='width:1.5rem;'>%護盾";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
                case '6':
                    // 製鍊的CTP
                    console.log("製鍊的CTP");
                    var input1 = "HP +<input class='center' type='text' name='value-1' style='width:2.4rem;'>%";
                    var input2 = "回復率 +<input class='center' type='text' name='value-2' style='width:2.4rem;'>%";
                    var input3 = "HP<input class='center' type='text' name='hp' style='width:1.5rem;'>% 阻擋<input class='center' name='power' type='text' style='width:1rem;'>打擊數";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
                case '7':
                    // 權威的CTP
                    console.log("權威的CTP");
                    var input1 = "<input type='checkbox' name='ignore' value='1' checked> <span><u>破防</u>免疫</span>";
                    var input2 = "爆擊傷害+<input class='center' type='text' name='value-1' style='width:2.4rem;'>%";
                    var input3 = "HP<input class='center' type='text' name='hp' style='width:1.5rem;'>%<u>無敵</u>(<input class='center' name='sec' type='text' style='width:1rem;'>)秒";
                    $(target).siblings('.value-1').html(input1);
                    $(target).siblings('.value-2').html(input2);
                    $(target).siblings('.value-3').html(input3);
                    break;
            };
            $(".special-form").on('submit', (e) => {
                e.preventDefault();
                let form = e.currentTarget;
                $.post('api/edit-specials.php', $(form).serialize(), (result) => {
                    console.log(result);
                    if (result == 1) {
                        alert('【新增】資料寫入成功。');
                        specials();
                    } else {
                        alert('【新增】操作有誤，請重新再試一次。');
                    }
                })
            })
        })
    })
</script>