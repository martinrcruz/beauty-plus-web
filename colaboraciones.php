<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<!DOCTYPE html>
<html lang="<?php renderSiteLanguage(); ?>">

<head>
    <?php renderPageHeader('Colaboraciones | Beauty Plus', 'colaboraciones'); ?>
</head>

<body>
    <h1 class="hidden">Colaboraciones Beauty Plus</h1>
    <?php
    require_once('./_partials/contact/_contactbar.php');
    require_once('./_partials/header/_header.php');
    ?>
    <main class="main">
        <?php
        renderSectionSubpageHeader('Colaboraciones');
        ?>
        <section class="colaboraciones">
            <div class="colaboraciones__wrapper">
                <article class="colaboraciones__unete">
                    <h2 class="section-custom__subtitle">¡Únete a nuestro Programa de Colaboraciones para Influencers!
                    </h2>
                    <div class="block-two-columns">

                        <div class="text-block-1 colaboraciones__unete-text">
                            <p>
                                Si eres creador de contenido y
                                amas conectar con tu audiencia,
                                queremos trabajar contigo.
                                Buscamos influencers apasionados
                                para comunicar nuestra marca y ser
                                parte de algo único.
                            </p>
                        </div>
                        <div class="section-custom__unete-svg">
                            <?php echo file_get_contents('./img/svg/influencer.svg'); ?>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="colaboraciones">
            <div class="colaboraciones__wrapper">
                <article class="block-two-columns colaboraciones__valores">
                    <div class="colaboraciones__valores-col">
                        <h2>¿Qué ofrecemos?</h2>
                        <ul>
                            <li>
                                <h3 class="colaboraciones__valores">Premios exclusivos:</h3>
                                <p>Productos, descuentos y regalosespeciales.</p>
                            </li>
                            <li>
                                <h3 class="colaboraciones__valores">Colaboraciones a medida:</h3>
                                <p>Diseñamos campañas adaptadas
                                    a tu estilo y comunidad.</p>
                            </li>
                            <li>
                                <h3 class="colaboraciones__valores">Visibilidad</h3>
                                <p>Destacamos a nuestros
                                    colaboradores en nuestras redes
                                    sociales y página web.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="colaboraciones__valores-col">
                        <h2>¿Qué ofrecemos?</h2>
                        <ul>
                            <li>
                                <h3 class="colaboraciones__valores">Premios exclusivos:</h3>
                                <p>Productos, descuentos y regalosespeciales.</p>
                            </li>
                            <li>
                                <h3 class="colaboraciones__valores">Colaboraciones a medida:</h3>
                                <p>Diseñamos campañas adaptadas
                                    a tu estilo y comunidad.</p>
                            </li>
                            <li>
                                <h3 class="colaboraciones__valores">Visibilidad</h3>
                                <p>Destacamos a nuestros
                                    colaboradores en nuestras redes
                                    sociales y página web.</p>
                            </li>
                        </ul>
                    </div>
                </article>

            </div>

        </section>
        <section class="colaboraciones">
            <div class="colaboraciones__wrapper">
                <article class="colaboraciones__footer">
                    <div class="colaboraciones__footer-bg-image">
                        <img src="./img/servicios/chicas.jpg" alt="Fonto de servicios" alt="Mujers felices de fondo">
                    </div>
                    <p>
                        ¡Juntos podemos llegar más lejos!<br />
Si crees que tu estilo se alinea con nuestra marca,
queremos escucharte!
</p>
                </article>
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