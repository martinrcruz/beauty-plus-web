<?php
declare(strict_types=1);
require_once('./_requires/common.php');

$showInnerTitle = defined('PUNTOS_SECTION_SHOW_INNER_TITLE') ? PUNTOS_SECTION_SHOW_INNER_TITLE : true;
?>

<section class="puntos">
    <!-- CONTAINER de Bootstrap -->
    <div class="container">
        <!-- ROW principal para alinear Info (col 1) y Fotos (col 2) -->
        <div class="row align-items-center puntos__wrapper">
            
            <!-- Columna IZQUIERDA: información y título -->
            <div class="col-12 col-md-6 puntos__info mb-4 mb-md-0">
                <div class="puntos__info-wrapper">
                    
                    <div class="puntos__info-header">
                        <?php if ($showInnerTitle): ?>
                            <h1 class="logo">
                                <span>Puntos</span>
                                <span class="logo__texto">
                                    Beauty Plu
                                    <span class="logo__texto-stars">s
                                        <span class="logo__texto-stars-svg">
                                            <?php echo file_get_contents('./img/svg/estrellitas.svg'); ?>
                                        </span>
                                    </span>
                                </span>
                            </h1>
                        <?php endif; ?>
                    </div>
                    
                    <div class="puntos__info-body">
                        <p>
                            Por cada euro invertido en alguno de nuestros tratamientos,
                            se obtendrá un punto. Dichos puntos se irán acumulando 
                            a lo largo de todo el año.
                        </p>
                    </div>
                    
                    <div class="puntos__info-footer">
                        <div class="puntos__info-footer-svg">
                            <?php echo file_get_contents('./img/svg/programa-de-puntos.svg'); ?>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Columna DERECHA: fotos -->
            <div class="col-12 col-md-6">
                <!-- 
                  Usamos row + row-cols para que las imágenes 
                  sean responsivas; se ajustan solas en columnas
                -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col pic">
                        <img src="./img/puntos_1.jpg" alt="Imagen 1" class="img-fluid">
                    </div>
                    <div class="col pic">
                        <img src="./img/puntos_2.jpg" alt="Imagen 2" class="img-fluid">
                    </div>
                    <div class="col pic">
                        <img src="./img/puntos_3.jpg" alt="Imagen 3" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
