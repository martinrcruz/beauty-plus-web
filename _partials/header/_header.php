<?php
declare(strict_types=1);
require_once('./_requires/common.php');

$brandTitle = 'Ir al nincio de Beauty Plus';
$brandAriaLabel = 'Ir al nincio de Beauty Plus';
?>
<header class="header">
    <div class="header__wrapper">
        <div class="header__left">
            <a class="header__brand" href="/" title="<?php echo $brandTitle; ?>" aria-label="<?php echo $brandTitle; ?>"
                target="_self">
                <span>Ir al inicio de Beauty Plus</span>
                <?php echo file_get_contents('./img/beautyplus_logo.svg'); ?>
            </a>
            <div class="header__firma" title="by Dr. Ariel Ramirez">
                <?php echo file_get_contents('./img/svg/firma-3.svg'); ?>
            </div>
        </div>
        <div class="header__right">
            <div class="access-button access-button__signup">
                <a href="" target="_blank" title="Hazte socio">
                    <span class="access-button-text">hazte socio ahora!</span>
                </a>
            </div>
            <div class="access-button">
                <a href="/acceso" target="_blank" title="Acceso para socios">
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
</header>