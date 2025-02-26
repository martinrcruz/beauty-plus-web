<?php

declare (strict_types=1);
chdir('..');

$config = require('./_config/galeria_config.php');

$folder = $config['folder'];
$imagenes = $config['imagenes'];
$baseFolder = $folder['base'];
$fullFolder = $folder['full'];
$miniaturaFolder = $folder['miniatura']['folder'];
$miniaturaSuffix = $folder['miniatura']['suffix'];

$pictures = [];

foreach($imagenes as $imagen){
    $miniaturaImage = $baseFolder . $miniaturaFolder . $imagen['nombre'] . $miniaturaSuffix;
    $pictures[] = <<< eot
<article class="galeria__grid-item">
    <picture>
        <source srcset="{$miniaturaImage}.avif" type="image/avif">

        <source srcset="{$miniaturaImage}.webp" type="image/webp">

        <img src="{$miniaturaImage}.jpg" alt="{$imagen['alt']}" title="{$imagen['alt']}" width="360" height="270" loading="lazy">
    </picture>
</article>
eot;
}

file_put_contents('./_templates/galeria_template.html', join(PHP_EOL, $pictures));
unset($pictures);