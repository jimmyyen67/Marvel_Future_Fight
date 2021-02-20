<?php
include "../config.php";
$rows = json_decode($_POST['data'], true);
?>
<div class="container">
    <div class="row">
        <?php foreach ($rows as $key => $row) { ?>
            <div class="card col-12 col-sm-6 col-xl-4 col-xxl-2">
                <div class="card-body">
                    <p class="h5 card-title text-dark"><?= $row['name'] ?></p>
                    <div class="card-info" style="flex-direction:column;">
                        <!-- 同位素-8 start -->
                        <form action="" class="isotope-form">
                            <small>
                                <div class="isotope">
                                    <?php
                                    if ($row['return_code'] == 9999) {
                                    ?>
                                        <div>
                                            <select class="m-1" name="isotope">
                                                <option value="1">憤怒</option>
                                                <option value="2">過載</option>
                                                <option value="3">鷹眼</option>
                                            </select>
                                            <select class="m-1" name="rank">
                                                <option value="12">第12階</option>
                                                <option value="11">第11階</option>
                                                <option value="10">第10階</option>
                                                <option value="9">第09階</option>
                                                <option value="8">第08階</option>
                                                <option value="7">第07階</option>
                                                <option value="6">第06階</option>
                                            </select><br>
                                            <?php
                                            for ($t = 1; $t < 9; $t++) {
                                            ?>
                                                <input type="checkbox" name="<?= 'star_' . $t ?>" value="1">
                                                <select class="text-black-50" name="<?= 'iso_' . $t ?>">
                                                    <?php
                                                    for ($i = 1; $i < 9; $i++) {
                                                    ?>
                                                        <option value="<?= $i ?>" <?= ($i == $t) ? 'selected' : ''; ?>><?= $isoList[$i] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="text" class="center text-black-50" name="<?= 'value_' . $t . '1' ?>" style="width:2.3rem;">
                                                <input type="text" class="center text-black-50" name="<?= 'value_' . $t . '2' ?>" style="width:2.3rem;">
                                                <br>
                                            <?php }
                                            ?>
                                        </div>
                                        <div style="text-align:right;margin-top:5px;">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <input class="bg-success text-white" type="submit" value="存檔">
                                            <input class="bg-danger text-light" type="reset" value="reset">
                                        </div>
                                    <?php
                                    } elseif ($row['return_code'] == 0000) {
                                    ?>
                                        <div>
                                            <select class="m-1" name="isotope">
                                                <option value="1" <?= ($row['isotope'] == '1') ? 'selected' : ''; ?>>憤怒</option>
                                                <option value="2" <?= ($row['isotope'] == '2') ? 'selected' : ''; ?>>過載</option>
                                                <option value="3" <?= ($row['isotope'] == '3') ? 'selected' : ''; ?>>鷹眼</option>
                                            </select>
                                            <select class="m-1" name="rank">
                                                <option value="12" <?= ($row['rank'] == 12) ? 'selected' : ''; ?>>第12階</option>
                                                <option value="11" <?= ($row['rank'] == 11) ? 'selected' : ''; ?>>第11階</option>
                                                <option value="10" <?= ($row['rank'] == 10) ? 'selected' : ''; ?>>第10階</option>
                                                <option value="9" <?= ($row['rank'] == 9) ? 'selected' : ''; ?>>第09階</option>
                                                <option value="8" <?= ($row['rank'] == 8) ? 'selected' : ''; ?>>第08階</option>
                                                <option value="7" <?= ($row['rank'] == 7) ? 'selected' : ''; ?>>第07階</option>
                                                <option value="6" <?= ($row['rank'] == 6) ? 'selected' : ''; ?>>第06階</option>
                                            </select><br>
                                            <?php for ($t = 1; $t < 9; $t++) { ?>
                                                <input type="checkbox" name="<?= 'star_' . $t ?>" value="1" <?= ($row['star_' . $t] == 1) ? 'checked' : ''; ?>>
                                                <select name="<?= 'iso_' . $t ?>" style="color:<?= $isoColor[$row['iso_' . $t]] ?>;">
                                                    <?php for ($i = 1; $i < 9; $i++) { ?>
                                                        <option value="<?= $i ?>" <?= ($row['iso_' . $t] == $i) ? 'selected' : ''; ?>><?= $isoList[$i] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="text" class="text-muted" name="<?= 'value_' . $t . '1' ?>" style="text-align:center;width:2.3rem;" value="<?= $row['value_' . $t . '1'] ?>">
                                                <input type="text" class="text-muted" name="<?= 'value_' . $t . '2' ?>" style="text-align:center;width:2.3rem;" value="<?= $row['value_' . $t . '2'] ?>">
                                                <br>
                                            <?php }
                                            ?>
                                        </div>
                                        <div style="text-align:right;margin-top:5px;">
                                            <input type="hidden" name="ch_id" value="<?= $row['ch_id'] ?>">
                                            <input class="bg-success text-white" type="submit" value="存檔">
                                            <input class="bg-danger text-light" type="reset" value="reset">
                                        </div>
                                    <?php } ?>
                                </div>
                            </small>
                        </form>
                        <!--同位素-8 end-->
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script>
    $(function() {
        $(".isotope-form").on('submit', (e) => {
            e.preventDefault();
            let form = e.currentTarget;
            $.post('api/edit-isotope.php', {
                'data': $(form).serialize()
            }, (res) => {
                isotope();
            })
        })
    })
</script>