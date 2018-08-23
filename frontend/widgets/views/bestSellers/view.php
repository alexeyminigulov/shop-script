<?php

/* @var $content string */

?>
<div class="span16 hidden-phone">
    <div class="ty-sidebox">
        <div class="ty-sidebox__title cm-combination " id="sw_sidebox_75">
            <span class="ty-sidebox__title-wrapper hidden-phone">Хиты продаж</span>
            <span class="ty-sidebox__title-wrapper visible-phone">Хиты продаж</span>
            <span class="ty-sidebox__title-toggle visible-phone">
                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
            </span>
        </div>
        <div class="ty-sidebox__body" id="sidebox_75">
            <ul class="ty-template-small">
                <?= $content ?>
            </ul>
        </div>
    </div>
</div>