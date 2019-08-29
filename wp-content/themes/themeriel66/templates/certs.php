<div class="certs">

    <?
    $args = array(
        'post_type' => 'certs',
        'publish' => true,
        'paged' => get_query_var('paged')
    );
    query_posts($args);

    if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="cert">
        <img class="cert__image" src="<? the_field('image'); ?>">
    </div>
    <div class="cert">
        <img class="cert__image" src="<? the_field('image'); ?>">
    </div>
    <div class="cert">
        <img class="cert__image" src="<? the_field('image'); ?>">
    </div>

    <? endwhile; ?>
    <? endif; ?>

</div>