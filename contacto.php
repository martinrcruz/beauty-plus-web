<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Contacto | Beauty Plus', 'contacto'); ?>
</head>

<body>
    <h1 class="hidden">Contacto Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <section class="section-custom">
            <div class="section-custom__wrapper section-custom__wrapper-style-1">
        <?php
        renderSectionSubpageHeader('Contacto');
        ?>
                <div class="text-block-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perferendis quasi velit odit minus, est provident explicabo ab repudiandae atque. Temporibus repudiandae placeat tempora tempore architecto adipisci quibusdam velit fugiat.</p>
                </div>
            </div>
        </section>

        <?php
        renderContactoSection('page');
        ?>
    </main>
    <?php
    require_once('./_partials/nav/__mobile_menu_section.php');
    require_once('./_partials/footer/__footer_section.php');
    ?>

</body>

</html>