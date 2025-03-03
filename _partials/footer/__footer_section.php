<?php
declare(strict_types=1);
require_once('./_requires/common.php');
?>
<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__firma">
            <?php echo file_get_contents('./img/svg/firma-2.svg'); ?>
        </div>
        <div class="footer__links">
            <ul>
                <?php
                $links = require_once('./_assets/data/footers_links.php');
                foreach ($links as $link):
                    $linkText = $link['text'];
                    $linkTitle = $link['title'];
                    $linkHref = $link['href'];
                    ?>
                    <li><a target="_blank" href="<?php echo $linkHref; ?>"
                            title="<?php echo $linkTitle; ?>"><?php echo $linkText; ?></a></li>
                    <?php
                endforeach;
                unset($links, $linkText, $linkTitle, $linkHref);
                ?>
            </ul>
        </div>
    </div>
</footer>