<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<sector class="mobile-menu">
    <div class="mobile-menu__wrapper">
        <div class="mobile-menu__header">
            <div class="mobile-menu__header-title">
                <h1>Menú</h1>
            </div>
            <div class="mobile-menu__close-button">
                <?php echo file_get_contents('./img/svg/x-lg.svg'); ?>
            </div>
        </div>
        <nav class="mobile-menu__body" rol="navigation" aria-label="Menú de navegación principal">
            <ul>
                <?php
                $menus = require_once('./_assets/data/mobile_menu.php');
                foreach ($menus as $menu):
                    $menuText = trim($menu['text']);
                    $menuTitle = trim($menu['title']);
                    $menuAriaLabel = trim($menu['aria-label']);
                    $menuHref = trim($menu['href']);
                    $subMenu = $menu['submenu'] ?? [];
                    $subMenuClass = !empty($subMenu) ? 'mobile-menu__main-item' : '';
                    ?>
                    <li>
                        <a class="<?php echo $subMenuClass; ?>" target="_self" href="<?php echo $menuHref; ?>"
                            title="<?php echo $menuTitle; ?>"
                            aria-label="<?php echo $menuAriaLabel; ?>"><?php echo $menuText; ?></a>
                        <ul class="mobile-menu__submenu mobile-menu__submenu-hidden">
                            <?php

                            foreach ($subMenu as $subItem):
                                $text = trim($subItem['text']);
                                $title = trim($subItem['title']);
                                $ariaLabel = trim($subItem['aria-label']);
                                $href = trim($subItem['href']);
                                ?>
                                <li><a target="_self" href="<?php echo $href; ?>" title="<?php echo $title; ?>"
                                        aria-label="<?php echo $ariaLabel; ?>"><?php echo $text; ?></a></li>
                                <?php
                            endforeach;
                            ?>
                        </ul>
                    </li>
                    <?php
                endforeach;
                unset($menus, $menuText, $menuTitle, $menuHref, $subMenu, $text, $title, $href, $subMenuClass, $ariaLabel, $menuAriaLabel);
                ?>
            </ul>
        </nav>
    </div>
</sector>
<script defer src="./js/mobile_menu.js" type="module"></script>