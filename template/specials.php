<?php
include "../config.php";
$datas = json_decode($_GET['data'], true);
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($datas as $key => $value) {
            ?>
            <div class="card col-sm-12 col-md-4 col-lg-3 col-xxl-2" style="width:auto;margin:.5rem;">
                <div class="card-body">
                    <p class="h5 card-title text-dark"><?= $value['name'] ?></p>
                    <div class="card-info">
                        <!-- 特殊裝備 start -->
                        <div class="special p-1 text-black-50">
                            <?php if ($value['special'] == 000) { ?>
                                <form>
                                    <select class="special-select" name="special">
                                        <option value="000">請選擇...</option>
                                        <option value="0">終極高塔</option>
                                        <option value="1">超越的CTP</option>
                                        <option value="2">激動的CTP</option>
                                        <option value="3">狂怒的CTP</option>
                                        <option value="4">破壞的CTP</option>
                                        <option value="5">再生的CTP</option>
                                        <option value="6">製鍊的CTP</option>
                                        <option value="7">權威的CTP</option>
                                    </select><br>
                                    <input type="text" name="value1" placeholder="Value1..."><br>
                                    <input type="text" name="value2" placeholder="Value2..."><br>
                                    <input type="text" name="value3" placeholder="Value3..."><br>
                                    <input type="text" name="value4" placeholder="Value4...">
                                    <div class="center">
                                        <input type="reset" class="btn btn-sm btn-link text-dark" value="Reset">
                                        <input type="button" class="btn btn-sm btn-link text-success" value="Save"
                                               onclick="">
                                    </div>
                                </form>
                            <?php } ?>
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
</script>