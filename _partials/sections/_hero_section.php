<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<section class="hero">
    <div class="hero__whatsapp">
        <a href="<?php echo getWhatsappLink(); ?>" title="<?php echo getWhatsappTitle(); ?>"
            aria-label="<?php echo getWhatsappAriaLabel(); ?>" target="_blank">
            <?php echo file_get_contents('./img/svg/whatsapp-verde.svg'); ?>
        </a>
    </div>

    <div class="hero__barra">
        <div class="hero__barra-firma">
            <?php echo file_get_contents('./img/svg/firma.svg'); ?>
        </div>
    </div>
    <div class="hero__wrapper">
        <div class="hero__content">
            <div class="hero__content-logo">
                <?php echo file_get_contents('./img/beautyplus_logo.svg'); ?>
            </div>
            <div class="hero__content-text">
                <h2>Premia tu fidelidad</h2>
                <p>Mediante puntos que se van acumulando al hacer uso de nuestros tratamientos</p>
            </div>
            <div class="hero__cta">
                <a href="/" class="button" title="Hazte socio ahora y disfruta los mejores beneficios"
                    aria-label="Hazte socio y disfruta de los mejores beneficios">Hazte socio ahora!</a>

            </div>
        </div>
        <div class="hero__man">
            <img src="img/hero/hero_man.png" alt="">
        </div>
        <div class="hero__woman">
            <img src="img/hero/hero_woman.png" alt="">
        </div>
    </div>
</section>