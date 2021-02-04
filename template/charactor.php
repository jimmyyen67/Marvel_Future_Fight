<?php
include "../config.php";
$data = json_decode($_GET['data'], true);
?>

<div class="container">
    <div class="row">
        <?php
        foreach ($data

        as $key => $value) {
        // tier字體顏色
        switch ($value['tier']) {
            case '2':
                $tierBadge = 'bg-primary text-dark';
                break;
            case '2.5':
                $tierBadge = 'bg-info text-dark';
                break;
            case '3':
                $tierBadge = 'bg-warning text-dark';
                break;
        }
        // attribute字體顏色
        switch ($value['attribute']) {
            case '1':
                $attributeColor = 'badge bg-danger';
                break;
            case '2':
                $attributeColor = 'badge bg-primary';
                break;
            case '3':
                $attributeColor = 'badge bg-success';
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
        <div class="charactor col-12 m-1">
            <div class="card"
            ">
            <div class="card-body">
                <p class="h5 card-title text-dark"><?= $value['name'] ?></p>
                <p class="h6 card-subtitle mb-2 text-muted">
                    <small class="badge <?= $tierBadge ?>"><?= $tier[$value['tier']] ?> </small>
                    <small class="badge bg-light text-dark">LV.<?= $value['level'] ?> </small>
                    <small class="<?= $attributeColor ?>"><?= $attribute[$value['attribute']] ?></small>
                </p>
                <div class="quality d-inline">
                    <form>
                        <small class="text-black-50">
                            爆擊機率：
                            <input id="v1<?=$value['id']?>" type="text" class="<?= $hitColor ?>" value="<?= $value['critical_hit'] ?>">%
                        </small><br>
                        <small class="text-black-50">
                            爆擊傷害：
                            <input id="v2<?=$value['id']?>" type="text" class="<?= $rateColor ?>" value="<?= $value['critical_rate'] ?>">%
                        </small><br>
                        <small class="text-black-50">
                            無視防禦：
                            <input id="v3<?=$value['id']?>" ype="text" class="<?= $ignoreColor ?>" value="<?= $value['ignore_defence'] ?>">%
                        </small><br>
                        <small class="text-black-50">
                            技能冷卻：
                            <input id="v4<?=$value['id']?>" type="text" class="<?= $coolColor ?>" value="<?= $value['cool_down'] ?>">%
                        </small><br>
                        <input class="btn btn-sm btn-link" type="button" value="數值變更"
                               onclick="editQuality(<?= $value['id'] ?>);">
                        <input type="reset" class="btn btn-sm text-decoration-underline" value="reset">
                    </form>
                </div>
            </div>
        </div>
        <div class="card col-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">同位素-8</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card col-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">特殊裝備</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card col-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">制服列表</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>
</div>