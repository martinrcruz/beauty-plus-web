<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<section class="promociones">
        <div class="promociones__wrapper">
            <h1 class="section-custom__title">Promociones</h1>
            <div class="promociones__items">
                <?php
                $promociones = require_once('./_assets/data/promociones-ext.php');
                foreach ($promociones as $promocion):
                    $promocionTitle = trim($promocion['title']);
                    $promocionDescription = trim($promocion['description']);
                    $promocionImg = trim($promocion['img']);
                    $promocionLink = trim($promocion['link']);
                    ?>
                    <article class="promociones__item">
                        <div class="promociones__item-img">
                            <img src="<?php echo $promocionImg; ?>" alt="<?php echo $promocionTitle; ?>">
                        </div>
                        <h1 class="promociones__item-title"><?php echo $promocionTitle; ?></h1>
                        <p class="promociones__item-description"><?php echo $promocionDescription; ?></p>
                        <a class="promociones__item-link" href="<?php echo $promocionLink; ?>"
                            title="<?php echo $promocionTitle; ?>">solicitar cita previa >></a>
                    </article>
                    <?php
                endforeach;
                unset($promociones, $ventajaIndex, $promocionDescription, $promocionImg);
                ?>
            </div>
        </div>
    </section>
