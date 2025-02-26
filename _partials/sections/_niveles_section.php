<section class="niveles">
        <div class="niveles__wrapper">
            <div class="niveles__background-picture">
                <img src="./img/mujer_niveles.png" alt="Niveles Beauty Plus">
            </div>
            <article class="niveles__content">
                <div class="niveles__content-header">
                    <h1 class="logo">
                        <span>Niveles</span>
                        <span class="logo__texto">Beauty Plu<span class="logo__texto-stars">s
                                <span class="logo__texto-stars-svg">
                                    <?php echo file_get_contents('./img/svg/estrellitas.svg'); ?>
                                </span>
                            </span>
                        </span>
                    </h1>
                </div>
                <div class="niveles__content-body">
                    <p class="niveles__content-body-text">Los niveles se alcanzan según el gasto realizado. Los niveles
                        son: Blanco, Silver, Gold y
                        Platinum.</p>
                </div>
                <div class="niveles__items">
                    <?php
                    $niveles = require_once('./_assets/data/niveles.php');
                    foreach ($niveles as $nivel):
                        $nivelName = $nivel['name'];
                        $nivelPrice = floatval($nivel['price']);
                        $nivelCurrency = $nivel['currency'];
                        $nivelBackgroundColor = $nivel['background-color'];
                        ?>
                        <article class="niveles__item" title="<?php echo $nivelName; ?>">
                            <div class="niveles__item-wrapper"
                                style="background-color: <?php echo $nivelBackgroundColor; ?>;">
                                <p class="niveles__item-from">Hasta</p>
                                <p class="niveles__item-price"><?php echo $nivelPrice; ?><span
                                        class="niveles__item-currency"><?php echo $nivelCurrency; ?></span></p>
                            </div>
                        </article>
                    <?php endforeach;
                    unset($niveles, $nivelName, $nivelPrice, $nivelCurrency, $nivelBackgroundColor);
                    ?>
                </div>
            </article>
        </div>
    </section>