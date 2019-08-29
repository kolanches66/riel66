<div class="owl-carousel owl-theme reviews__carousel">

    <?
    $args = array(
        'post_type' => 'reviews',
        'publish' => true,
        'paged' => get_query_var('paged')
    );
    query_posts($args);

    if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="item">
        <div class="card card_review">
            <!-- <div class="card__icon">
                <div class="card__icon icon_user"></div>
            </div> -->
            <div class="card__text">
                <div class="card__author"><? the_title(); ?></div>
                <div class="card__body"><? the_field('content'); ?></div>
            </div>
        </div>
    </div>

    <? endwhile; ?>
    <? endif; ?>

</div>