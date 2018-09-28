<?php

/* @var $rating float */

?>
<span class="ty-nowrap ty-stars">
    <a class="cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion">
        <?php
        $tpl = '';
        for ($i=1; $i < 6; $i++) {
            if (intval($rating) >= $i) {
                $tpl .= '<i class="ty-stars__icon ty-icon-star"></i>';
            } elseif (intval($rating)+1 == $i && $rating - intval($rating) >= 0.4 && $rating - intval($rating) < 0.8) {
                $tpl .= '<i class="ty-stars__icon ty-icon-star-half"></i>';
            } elseif (intval($rating)+1 == $i && $rating - intval($rating) < 0.4 && $rating - intval($rating) >= 0.8) {
                $tpl .= '<i class="ty-stars__icon ty-icon-star"></i>';
            } else {
                $tpl .= '<i class="ty-stars__icon ty-icon-star-empty"></i>';
            }
        }
        echo $tpl;
        ?>
    </a>
</span>