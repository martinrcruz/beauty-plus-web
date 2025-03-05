<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Niveles | Beauty Plus', 'niveles'); ?>
</head>

<body>
    <h1 class="hidden">Niveles Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <?php
        renderSectionSubpageHeader('Programa de niveles');
        require_once('./_partials/sections/_niveles_section.php');
        ?>
        <section class="niveles-2">
            <article class="niveles-2__wrapper">
                <h1 class="section-custom__title">Título de segunda sección de Niveles</h1>
                <div class="block-two-columns">
                    <div class="block-responsive-picture">
                        <img src="./img/woman-001.jpg" alt="Mujer">
                    </div>
                    <div class="text-block-1">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolorem provident
                            consequuntur, ea veritatis, quod velit veniam eius recusandae quo ipsum natus itaque, sint
                            deleniti voluptates vel repudiandae facilis corrupti.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolorem provident
                            consequuntur, ea veritatis, quod velit veniam eius recusandae quo ipsum natus itaque, sint
                            deleniti voluptates vel repudiandae facilis corrupti.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolorem provident
                            consequuntur, ea veritatis, quod velit veniam eius recusandae quo ipsum natus itaque, sint
                            deleniti voluptates vel repudiandae facilis corrupti.</p>
                    </div>
                </div>
            </article>
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