<?php

declare (strict_types=1);
$runName = 'start';
$prefix = 'watch';
$pagesNames = [
    'index',
    'niveles',
    'puntos',
    'ventajas',
    'promociones',
    'equivalencias',
    'colaboraciones',
    'recomendaciones',
//    'tarjetaregalo',
//    'servicios',
    'acceso',
    'contacto',
];


// Función para se ejecutada con array_map
$templateRenderer = fn($pageName) => <<<eot
"{$prefix}:sass:{$pageName}": "sass --watch --source-map --no-stop-on-error --color scss/{$pageName}.scss:scss/_css/{$pageName}.css",
"{$prefix}:postcss:{$pageName}": "postcss scss/_css/{$pageName}.css -o _assets/css/{$pageName}.css -u postcss-pxtorem autoprefixer --source-map --watch",
eot;
$templateArray = array_map($templateRenderer, $pagesNames);

$runLineTemplate = <<<eot
"{$runName}": "npm-run-all --parallel {$prefix}:*:*",
eot;

$output = join(PHP_EOL, $templateArray) . PHP_EOL . $runLineTemplate;

file_put_contents('generated_package_json_watches.txt', $output);

echo 'Listo';
