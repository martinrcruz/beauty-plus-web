<?php
declare(strict_types=1);
require_once('./_requires/common.php');

// Mode Style viene de common.php
if($modeStyle === 'page'){
    $styleClass='contacto__in-page';
}
?>
<section class="contacto <?php echo $styleClass; ?>">
        <div class="contacto__wrapper">
            <div class="contacto__whatsapp">
                <a href="<?php echo getWhatsappLink(); ?>" title="<?php echo getWhatsappTitle(); ?>" aria-label="<?php echo getWhatsappAriaLabel(); ?>" target="_blank">
                <?php echo file_get_contents('./img/svg/whatsapp-verde.svg'); ?>
                </a>
            </div>
            <div class="contacto__form">
                <h1>Contacto</h1>
                <form class="form" action="" method="post" enctype="multipart/form-data">
                    <div class="contacto__form-input">
                        <label for="form_contacto_nombre">Nombre</label>
                        <input type="text" id="form_contacto_nombre" name="nombre" placeholder="Nombre*" required>
                    </div>
                    <div class="contacto__form-input">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" placeholder="Teléfono*" required>
                    </div>
                    <div class="contacto__form-input">
                        <label for="form_contacto_email">Email</label>
                        <input type="email" id="form_contacto_email" name="email" placeholder="Email*" required>
                    </div>
                    <div class="contacto__form-input">
                        <label for="form_contacto_comentarios">Comentarios</label>
                        <textarea name="comentarios" id="form_contacto_email" rows="3"
                            placeholder="Comentarios*"></textarea>
                    </div>
                    <div class="contacto__form-button">
                        <button type="submit">enviar formuario >></button>
                    </div>
                </form>
            </div>
            <div class="contacto__info">
                <div class="contacto__info-firma">
                    <?php echo file_get_contents('./img/svg/firma-2.svg'); ?>
                </div>
                <div class="contacto__info-links">
                    <a target="_blank" href="https://maps.app.goo.gl/Jm1voAGXbTXJMHh98" title="Dirección">
                        Calle Domingo Dorestes 21, Local 12
                        3511 Vecindario, Las Palmas
                        Islas Canarias, España.
                    </a>
                    <p>Lunes a Viernes de 9:00 a 20:00</p>
                    <a target="_blank" href="tel:34680528560" title="+34 680 528 560">+34 680 528 560</a>
                    <a href="<?php echo getWhatsappLink(); ?>" title="<?php echo getWhatsappTitle(); ?>" aria-label="<?php echo getWhatsappAriaLabel(); ?>" target="_blank">+34 680 367 991</a>
                    <a target="_blank" href="mailto:info@drarielramiez.com"
                        title="info@drarielramiez.com">info@drarielramiez.com</a>
                </div>

            </div>
        </div>
    </section>