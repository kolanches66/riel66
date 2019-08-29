<ul class="services__list">

    <?
    $args = array(
        'post_type' => 'questions',
        'publish' => true,
        'paged' => get_query_var('paged')
    );
    query_posts($args);

    if (have_posts()): while (have_posts()) : the_post(); ?>

    <li class="services__listitem">
        <div class="card card_question">
            <div class="card__icon">
                <img class="card__icon__image" src="<? the_field('icon'); ?>">
            </div>
            <div class="card__content">
                <div class="card__header"><? the_title(); ?></div>
                <div class="card__description"><? the_field('description'); ?></div>
                <div class="card__body"><? the_field('article'); ?></div>
            </div>
        </div>
    </li>

    <? endwhile; ?>
    <? endif; ?>

</ul>

<script>
    jQuery('.card_question').click(function(e) {
        jQuery('html, body').animate({'scrollTop': jQuery('#callback').offset().top}, 500);
    });
</script>