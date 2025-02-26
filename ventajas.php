<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Ventajas | Beauty Plus', 'ventajas'); ?>
</head>

<body>
    <h1 class="hidden">Niveles Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <?php
        renderSectionSubpageHeader('Ventajas');
        require_once('./_partials/sections/_ventajas_section.php');
        ?>
        <section class="ventajas">
            <div class="ventajas__wrapper">
                <h1 class="section-custom__title">Título</h1>
                <ul class="ventajas__items-2">
                    <?php
                    $promociones = require('./_assets/data/ventajas.php');
                    foreach ($promociones as $promocion):
                        $ventajaIndex = intval($promocion['index']);
                        $promocionDescription = trim($promocion['description']);
                        $promocionImg = trim($promocion['icon']); ?>
                        <li class="ventajas__item-2-row">

                            <div class="ventajas__item">
                                <div class="ventajas__item-index"><?php echo $ventajaIndex; ?>.</div>
                                <div class="ventajas__item-body">
                                    <div class="ventajas__item-body-icon"><?php echo file_get_contents($promocionImg); ?>
                                    </div>
                                    <div class="ventajas__item-body-description"><?php echo $promocionDescription; ?></div>
                                </div>
                            </div>
                            <div class="ventajas__item-2-description text-block-2">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores eum, rem mollitia
                                    obcaecati ea iste similique labore facilis, error sint eaque repudiandae nisi rerum
                                    minima praesentium perspiciatis culpa, distinctio quis!
                                    obcaecati ea iste similique labore facilis.
                                </p>
                            </div>

                        </li>
                        <?php
                    endforeach;
                    unset($promociones, $ventajaIndex, $promocionDescription, $promocionImg);
                    ?>
                </ul>
            </div>
        </section>
        <?php
        renderContactoSection('footer');
        ?>
    </main>
    <?php
    require_once('./_partials/nav/__mobile_menu_section.php');
    require_once('./_partials/footer/__footer_section.php');
    ?>

</body>

</html>