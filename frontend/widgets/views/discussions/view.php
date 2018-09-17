<?php

/* @var $this \yii\web\View */
/* @var $discussions \domain\entities\Shop\Discussion[] */

?>

<div class="discussion-block" id="content_discussion_block">
    <div id="posts_list_214">
        <div class="ty-pagination-container cm-pagination-container" id="pagination_contents_comments_214">
            <?php foreach ($discussions as $discussion): ?>
                <?= $this->render('_discussion-post', [
                    'discussion' => $discussion,
                ])?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="ty-discussion-post__buttons buttons-container">
        <a class="ty-btn cm-dialog-opener cm-dialog-auto-size ty-btn__primary " rel="nofollow" data-ca-target-id="new_post_dialog_214">Написать отзыв</a>
    </div>
</div>