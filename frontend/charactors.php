<?php
include_once "../base.php";
include_once "../config.php";
$db = new DB('charactors');
$charactors = $db->all(); // 角色列表
foreach ($charactors as $key => $charactor) {
    $db = new DB('qualities');
    $quality = $db->find($charactor['id']); // 角色數值
    ?>
    <div class="card col-4 m-1" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $charactor['charactorName'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <em style="color:<?= $tier['color'][$charactor['tierLevel']] ?>;"><?= $tier['tier'][$charactor['tierLevel']] ?></em>
                <em style="color:<?= $attribute['color'][$charactor['attribute']] ?>;"><?= $attribute['main'][$charactor['attribute']] ?></em>
            </h6>
            <!-- 身體數值 Start -->
            <table style="font-size:small;font-weight:bold;color:#555;">
                <?php if (!empty($quality)) { ?>
                    <tr>
                        <td>爆擊機率:</td>
                        <td>
                            <?= $quality['criticalHit'] ?>%
                            <button class="badge bg-light text-dark" onclick="openModal('#modal', 'quality.php', <?=$quality['id']?>)">修改</button>
                        </td>
                    </tr>
                    <tr>
                        <td>爆擊傷害:</td>
                        <td><?= $quality['criticalRate'] ?>%</td>
                    </tr>
                    <tr>
                        <td>無視防禦:</td>
                        <td><?= $quality['ignoreDefence'] ?>%</td>
                    </tr>
                    <tr>
                        <td>技能冷卻:</t
                        <td><?= $quality['coolDown'] ?>%</td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td>爆擊機率:</td>
                        <td>
                            <button class="badge bg-dark" onclick="openModal('#modal', 'quality', 0)">輸入數值</button>
                        </td>
                    </tr>
                    <tr>
                        <td>爆擊傷害:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>無視防禦:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>技能冷卻:</td>
                        <td></td>
                    </tr>
                <?php } ?>
            </table>
            <!-- 身體數值 End -->
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    <?php
}
?>