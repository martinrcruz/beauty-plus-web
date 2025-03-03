<?php
declare(strict_types=1);
require_once('./_requires/common.php');
const PUNTOS_SECTION_SHOW_INNER_TITLE = false;
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Equivalencias | Beauty Plus', 'equivalencias'); ?>
</head>

<body>
    <h1 class="hidden">Equivalencias Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <?php
        renderSectionSubpageHeader('Equivalencias');
        require_once('./_partials/sections/_puntos_section.php');
        ?>
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