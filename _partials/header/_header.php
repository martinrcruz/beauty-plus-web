<?php
declare(strict_types=1);
require_once('./_requires/common.php');

$brandTitle = 'Ir al nincio de Beauty Plus';
$brandAriaLabel = 'Ir al nincio de Beauty Plus';
?>
<header class="header">
    <div class="container">
        <div class="row align-items-center header__wrapper">
            <!-- Columna IZQUIERDA: Logo y Firma -->
            <div class="col-12 col-md-6 header__left d-flex align-items-center">
                <a class="header__brand" href="/" title="<?php echo $brandTitle; ?>" aria-label="<?php echo $brandTitle; ?>" target="_self" style="width: 80px !important;">
                    <span>Ir al inicio de Beauty Plus</span>
                    <?php echo file_get_contents('./img/beautyplus_logo.svg'); ?>
                </a>
                <div class="header__firma ms-3" title="by Dr. Ariel Ramirez" style="width: 300px !important;">
                    <?php echo file_get_contents('./img/svg/firma-3.svg'); ?>
                </div>
            </div>
            <!-- Columna DERECHA: Botones y Burger Menu -->
            <div class="col-12 col-md-6 header__right d-flex align-items-center justify-content-md-end mt-0 mt-md-0">
                <div class="access-button access-button__signup me-3">
                    <a href="" target="_blank" title="Hazte socio">
                        <span class="access-button-text" style="font-weight: bold; color: white !important;">hazte socio ahora!</span>
                    </a>
                </div>
                <div class="access-button me-3">
                    <a href="https://clubbeautyplus.com/auth/login" target="_blank" title="Acceso para socios">
                        <span class="access-button-text">acceso</span>
                        <span class="access-button-icon">
                            <?php echo file_get_contents('./img/svg/user.svg'); ?>
                        </span>
                    </a>
                </div>
                <div class="burger-menu" id="mobile-menu-open-button">
                    <?php echo file_get_contents('./img/svg/list.svg'); ?>
                </div>
            </div>
        </div>
    </div>
</header>
