<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Club Beauty Plus', 'index'); ?>
</head>

<body>
    <h1 class="hidden">Club Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main>
        <?php
        include_once('./_partials/sections/_hero_section.php');
        include_once('./_partials/sections/_puntos_section.php');
        include_once('./_partials/sections/_niveles_section.php');
        include_once('./_partials/sections/_ventajas_section.php');
        include_once('./_partials/sections/_promociones_section.php');
        include_once('./_partials/sections/_consigue_puntos_section.php');
        renderContactoSection('footer');
        ?>
    </main>
    <?php
    require_once('./_partials/nav/__mobile_menu_section.php');
    require_once('./_partials/footer/__footer_section.php');
    ?>
</body>

</html>