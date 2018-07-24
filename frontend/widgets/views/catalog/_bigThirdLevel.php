<?php

/* @var $items string */

?>
<div class='ty-menu__submenu'>
    <ul class='ty-menu__submenu-list hiddenCol cm-responsive-menu-submenu' style='height: 95px;'>
        <?= $items ?>
    </ul>
    <a href='javascript:void(0);' onMouseOver='$(this).prev().addClass("view");$(this).addClass("hidden");' class='ty-menu__submenu-link-more'>Еще <i class='ty-icon-plus-circle'></i></a>
</div>