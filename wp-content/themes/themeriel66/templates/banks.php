<div class="bankcards">

    <?
    $args = array(
        'post_type' => 'banks',
        'publish' => true,
        'paged' => get_query_var('paged')
    );
    query_posts($args);

    if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="bankcard">
        <div class="bankcard__icon"><img src="<? the_field('icon'); ?>"></div>
        <h4 class="bankcard__title"><? the_title(); ?></h4>
    </div>

    <? endwhile; ?>
    <? endif; ?>

</div>