<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Acceso para socios | Beauty Plus', 'acceso'); ?>
</head>

<body>
    <h1 class="hidden">Acceso para socios Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <section class="acceso">
            <div class="acceso__wrapper">
                <?php
                renderSectionSubpageHeader('Acceso para socios');
                ?>
                <div class="text-block-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perferendis quasi velit odit
                        minus, est provident explicabo ab repudiandae atque. Temporibus repudiandae placeat tempora
                        tempore architecto adipisci quibusdam velit fugiat.</p>
                </div>
                <article class="acceso__form">
                    <div class="acceso__form-form">
                        <h2>login:</h2>
                        <form class="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-input">
                                <label for="form_access_user">Usuario*:</label>
                                <input type="text" id="form_access_user" name="user_name" placeholder="Nombre de usuario*"
                                    required>
                            </div>
                            <div class="form-input">
                                <label for="form_access_password">Contraseña*:</label>
                                <input type="password" id="form_access_password" name="user_pass" placeholder="Contraseña*" required>
                            </div>
                            <div class="form-input">
                                <a href="">Olvidé mi contraseña</a>
                            </div>
                            <div class="form-button">
                                <button type="submit">Acceder >></button>
                            </div>
                        </form>
                    </div>
                    <div class="acceso__form-side">
                        <?php echo file_get_contents('./img/acceso/acceso.svg'); ?>
                    </div>
                </article>
            </div>
        </section>

        <?php
        renderContactoSection('');
        ?>
    </main>
    <?php
    require_once('./_partials/nav/__mobile_menu_section.php');
    require_once('./_partials/footer/__footer_section.php');
    ?>

</body>

</html>