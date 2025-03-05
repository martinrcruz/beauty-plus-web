<?php
declare(strict_types=1);
require_once('./_requires/common.php');
const PUNTOS_SECTION_SHOW_INNER_TITLE = false;
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Puntos | Beauty Plus', 'puntos'); ?>
</head>

<body>
    <h1 class="hidden">Niveles Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <?php
        renderSectionSubpageHeader('Puntos');
        require_once('./_partials/sections/_puntos_section.php');
        ?>
        <section class="puntos-cupones">
            <div class="puntos-cupones__wrapper">
                <h1 class="section-custom__title">Cupones de regalo</h1>
                <div class="puntos-cupones__cupones">
                    <article class="puntos-cupones__cupon">
                        <div class="puntos-cupones__cupon-example">
                            <img src="./img/cupones/cupon_demo_1.png" alt="Cupón demo 1">
                        </div>
                        <div class="puntos-cupones__cupon-description">
                            <div class="puntos-cupones__cupon-description-text">
                                <div class="text-block-1">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolorem
                                        provident consequuntur, ea veritatis, quod velit veniam eius recusandae quo
                                        ipsum natus
                                        itaque, sint deleniti voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut expedita quas modi nam! Alias voluptatem, accusamus deleniti.</p>
                                        
                                </div>
                            </div>
                            <div class="puntos-cupones__cupon-description-picture">
                                <img src="./img/cupones/bp_600.png" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="puntos-cupones__cupon">
                        <div class="puntos-cupones__cupon-example">
                            <img src="./img/cupones/cupon_demo_2.png" alt="Cupón demo 2">
                        </div>
                        <div class="puntos-cupones__cupon-description">
                            <div class="puntos-cupones__cupon-description-text">
                                <div class="text-block-1">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolorem
                                        provident consequuntur, ea veritatis, quod velit veniam eius recusandae quo
                                        ipsum natus
                                        itaque, sint deleniti voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut expedita quas modi nam! Alias voluptatem, accusamus deleniti.</p>
                                        
                                </div>
                            </div>
                            <div class="puntos-cupones__cupon-description-picture">
                                <img src="./img/cupones/cupon_demo_2_qr.png" alt="">
                            </div>
                        </div>
                    </article>
                </div>
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