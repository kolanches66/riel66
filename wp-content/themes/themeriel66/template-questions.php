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
        <div class="services__card">
            <div class="services__card__icon">
                <img class="services__card__icon__image" src="<? the_field('icon'); ?>">
            </div>
            <div class="services__card__text">
                <div class="services__card__header"><? the_title(); ?></div>
                <div class="services__card__description"><? the_field('description'); ?></div>
            </div>
        </div>
    </li>

    <? endwhile; ?>
    <? endif; ?>

</ul>