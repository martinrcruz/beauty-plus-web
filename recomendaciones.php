<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Recomendaciones | Beauty Plus', 'recomendaciones'); ?>
</head>

<body>
    <h1 class="hidden">Colaboraciones Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <?php
        renderSectionSubpageHeader('Recomendaciones');
        ?>
        <section class="recomendaciones">
            <div class="recomendaciones__wrapper">
                <div class="recomendaciones__items">
                    <div class="recomendaciones__items-bg-image">
                        <img src="./img/servicios/chica-2.jpg" alt="Chica">
                    </div>
                    <article class="recomendaciones__item">
                        <h1>Programa de Recomendaciones Exclusivas</h1>
                        <p>¿Te encanta nuestro servicio y quieres compartirlo con tus amigos?</p>
                        <p>¡Tenemos un programa pensado especialmente para ti!</p>
                    </article>
                    <article class="recomendaciones__item">
                        <h1>Recomienda y gana</h1>
                        <p>Por cada nuevo cliente que llegue gracias a tu recomendación, recibirás beneficios exclusivos
                            como:</p>
                        <ul>
                            <li>Descuentos especiales.</li>
                            <li>Acceso a promociones únicas.</li>
                            <li>Regalos sorpresa para agradecer tu fidelidad.</li>
                        </ul>
                    </article>
                    <article class="recomendaciones__item">
                        <h1>¿Cómo funciona?</h1>
                        <p>Por cada nuevo cliente que llegue gracias a tu recomendación, recibirás beneficios exclusivos
                            como:</p>
                        <ol>
                            <li>Habla de nosotros con tus amigos, colegas o familiares.</li>
                            <li>Pídeles que mencionen tu nombre al contactarnos o utilicen tu código de recomendación.
                            </li>
                            <li>Una vez que se conviertan en clientes, activaremos tus beneficios.</li>
                        </ol>
                    </article>
                </div>
            </div>
        </section>
        <footer class="recomendaciones__footer">
                ¡Recomendar nunca fue tan fácil ni tan gratificante!<br />
                Empieza a compartir ahora y disfruta de las recompensas que tenemos para ti.
        </footer>

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