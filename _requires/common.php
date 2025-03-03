<?php

declare (strict_types=1);

date_default_timezone_set('Atlantic/Canary');

define('VERSION', '202501212332');

function renderPageHeader(string $pageTitle, string $pageName): void {
    $common = file_get_contents('./_templates/_common_head.html');
    $favicon = file_get_contents('./_templates/_favicon.html');
    $cssFile = "./_assets/css/{$pageName}.css?v=" . VERSION;
    echo <<<eot
{$common}
{$favicon}
<link rel="preload" href="{$cssFile}" as="style">
<link rel="stylesheet" href="{$cssFile}">
<title>{$pageTitle}</title>
eot;
}

function renderSectionSubpageHeader(string $title): void {
    $svgEstrellitas = file_get_contents('./img/svg/estrellitas.svg');
    echo <<<eot
     <div class="subpage-title">
        <div class="subpage-title__wrapper">
        <h1 class="logo">
            <span>{$title}</span>
            <span class="logo__texto">Beauty Plu<span class="logo__texto-stars">s
                    <span class="logo__texto-stars-svg">
                        {$svgEstrellitas}
                    </span>
                </span>
            </span>
        </h1>
        </div>
     </div>
eot;
}

/**
 * 
 * @param string $style
 * @return void
 */
function renderContactoSection(string $style): void {
    $modeStyle = strtolower(trim($style));
    include_once("./_partials/sections/_contacto_section.php");
    unset($modeStyle);
}

function getWhatsappLink():string{
    return 'https://wa.me/34680367991?text=Texto.';
}
function getWhatsappTitle():string{
    return 'Envíanos un Whatsapp';
}
function getWhatsappAriaLabel():string{
    return 'Envíanos un Whatsapp';
}
function renderSiteLanguage():void{
    echo 'es-ES';
}