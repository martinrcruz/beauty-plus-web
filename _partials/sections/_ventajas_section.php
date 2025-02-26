<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<section class="ventajas">
        <div class="ventajas__wrapper">
            <div class="ventajas__wrapper-background-picture">
                <img src="./img/fondo_ventajas.jpg" alt="">
            </div>
            <h1 class="section-custom__title">Ventajas</h1>
            <ul class="ventajas__items">
                <?php
                $promociones = require('./_assets/data/ventajas.php');
                foreach ($promociones as $promocion):
                    $ventajaIndex = intval($promocion['index']);
                    $promocionDescription = trim($promocion['description']);
                    $promocionImg = trim($promocion['icon']); ?>
                    <li class="ventajas__item">
                        <div class="ventajas__item-index"><?php echo $ventajaIndex; ?>.</div>
                        <div class="ventajas__item-body">
                            <div class="ventajas__item-body-icon"><?php echo file_get_contents($promocionImg); ?></div>
                            <div class="ventajas__item-body-description"><?php echo $promocionDescription; ?></div>
                        </div>
                    </li>
                    <?php
                endforeach;
                unset($promociones, $ventajaIndex, $promocionDescription, $promocionImg);
                ?>
            </ul>
        </div>
    </section>