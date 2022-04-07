<?php
if (post_password_required())
    return;
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title" style="margin-bottom: 0px;">
            <?php echo get_comments_users($post->ID, 0); ?> Yorumlar
        </h2>
        <ol class="comment-list" style="margin-top: 0px;">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 42,
                'format'            => 'html5'
            ));
            ?>
        </ol>
        <?php the_comments_pagination(array(
            'prev_text' => 'önceki sayfa',
            'next_text' => 'sonraki Sayfa',
            'prev_next' => false,
        )); ?>
    <?php endif; ?>
    <?php comment_form(array(
        'label_submit' => __('Yorum', 'textdomain')
    )); ?>
</div>