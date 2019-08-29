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
        <a data-fancybox="gallery" href="<? the_field('image'); ?>"><img class="cert__image" src="<? the_field('image'); ?>"></a>
    </div>

    <? endwhile; ?>
    <? endif; ?>

</div>