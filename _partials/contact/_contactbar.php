<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<div class="contactbar">
    <div class="contactbar__wrapper">
        <a href="tel:+34680367991" title="Llamar por teléfono" aria-label="Llamar por teléfono" target="_blank">
            <?php echo file_get_contents('./img/svg/phone.svg'); ?>
            <span>+34 680 367 991</span>
        </a>
        <a href="mailto:info@clubbeautyplus.com" title="info@clubbeautyplus.com" aria-label="info@clubbeautyplus.com"
            target="_blank">
            <?php echo file_get_contents('./img/svg/sobre.svg'); ?>
            <span>info@clubbeautyplus.com</span>
        </a>
        <a href="<?php echo getWhatsappLink(); ?>" title="<?php echo getWhatsappTitle(); ?>"
            aria-label="<?php echo getWhatsappAriaLabel(); ?>" target="_blank">
        <?php echo file_get_contents('./img/svg/whatsapp.svg'); ?>
        <span>+34 680 367 991</span>
        </a>
    </div>
</div>