<section class="niveles">
    <div class="container">
        <!-- ROW principal para dividir imagen y contenido -->
        <div class="row align-items-center niveles__wrapper">
            
            <!-- Columna IZQUIERDA: imagen -->
            <!-- Para móvil col-12, a partir de md col-md-6 -->
            <div class="col-12 col-md-6 text-center text-md-start mb-4 mb-md-0">
                <div class="niveles__background-picture">
                    <!-- .img-fluid para que la imagen sea adaptable -->
                    <img src="./img/mujer_niveles.png" alt="Niveles Beauty Plus" class="img-fluid">
                </div>
            </div>
            
            <!-- Columna DERECHA: contenido textual + items -->
            <div class="col-12 col-md-6">
                <article class="niveles__content">
                    <div class="niveles__content-header">
                        <h1 class="logo">
                            <span>Niveles</span>
                            <span class="logo__texto">
                                Beauty Plu
                                <span class="logo__texto-stars">s
                                    <span class="logo__texto-stars-svg">
                                        <?php echo file_get_contents('./img/svg/estrellitas.svg'); ?>
                                    </span>
                                </span>
                            </span>
                        </h1>
                    </div>

                    <!-- Cuerpo / Descripción -->
                    <div class="niveles__content-body">
                        <p class="niveles__content-body-text">
                            Los niveles se alcanzan según el gasto realizado. 
                            Los niveles son: Blanco, Silver, Gold y Platinum.
                        </p>
                    </div>

                    <!-- Items (niveles) con grid de Bootstrap -->
                    <!-- Agregamos row y las clases para controlar columnas según el viewport -->
                    <div class="niveles__items row-cols-2 row-cols-md-4 g-3 mt-4">
                        <?php
                        $niveles = require_once('./_assets/data/niveles.php');
                        foreach ($niveles as $nivel):
                            $nivelName = $nivel['name'];
                            $nivelPrice = floatval($nivel['price']);
                            $nivelCurrency = $nivel['currency'];
                            $nivelBackgroundColor = $nivel['background-color'];
                        ?>
                            <div class="col">
                                <article class="niveles__item" title="<?php echo $nivelName; ?>">
                                    <div class="niveles__item-wrapper" 
                                         style="background-color: <?php echo $nivelBackgroundColor; ?>;">
                                        <p class="niveles__item-from">Hasta</p>
                                        <p class="niveles__item-price">
                                            <?php echo $nivelPrice; ?>
                                            <span class="niveles__item-currency">
                                                <?php echo $nivelCurrency; ?>
                                            </span>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                        <?php unset($niveles, $nivelName, $nivelPrice, $nivelCurrency, $nivelBackgroundColor); ?>
                    </div>
                    <!-- Fin .niveles__items -->

                </article>
            </div>
            <!-- Fin Columna DERECHA -->

        </div>
        <!-- Fin .row -->
    </div>
    <!-- Fin .container -->
</section>
