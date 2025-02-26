<?php
declare(strict_types=1);
require_once('./_requires/common.php');

$showInnerTitle = defined('PUNTOS_SECTION_SHOW_INNER_TITLE') ? PUNTOS_SECTION_SHOW_INNER_TITLE : true;
?>
<section class="puntos">
    <div class="puntos__wrapper">
        <div class="puntos__info">
            <div class="puntos__info-wrapper">
                <div class="puntos__info-header">
                    <?php if ($showInnerTitle): ?>
                        <h1 class="logo">
                            <span>Puntos</span>
                            <span class="logo__texto">Beauty Plu<span class="logo__texto-stars">s
                                    <span class="logo__texto-stars-svg">
                                        <?php echo file_get_contents('./img/svg/estrellitas.svg'); ?>
                                    </span>
                                </span>
                            </span>
                        </h1>
                    <?php endif; ?>
                </div>
                <div class="puntos__info-body">
                    <p>Por cada euro invertido en alguno de nuestros
                        tratamientos, se obtendrá un punto. Dichos puntos
                        se irán acumulando a lo largo de todo el año.</p>
                </div>
                <div class="puntos__info-footer">
                    <div class="puntos__info-footer-svg">
                        <?php echo file_get_contents('./img/svg/programa-de-puntos.svg'); ?>
                    </div>
                </div>

            </div>


        </div>
        <div class="puntos__fotos">
            <div class="pic">
                <img src="./img/puntos_1.jpg" alt="">
            </div>
            <div class="pic">
                <img src="./img/puntos_2.jpg" alt="">
            </div>
            <div class="pic">
                <img src="./img/puntos_3.jpg" alt="">
            </div>
        </div>
    </div>
</section>