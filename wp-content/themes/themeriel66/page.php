<?php get_header(); ?>

<main>
    <div class="container">
        <section class="sect sect_page">
            <h1><?php the_title(); ?></h1>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_content(); ?>
                        <?php edit_post_link(); ?>
                    </article>
                <?php endwhile; ?>
                <?php else: ?>
                    <article>
                        <h2><?php _e( 'Sorry, nothing to display.', 'riel66' ); ?></h2>
                    </article>
                <?php endif; ?>

                <section class="sect sect_callback">
                    <div class="cont cont_50per">
                        <h2 class="sect__header">Заинтересованы?</h2>
                        <p class="sect__description">Дам бесплатную консультацию по телефону</p>
                        <div class="callback">
                            <? get_template_part('templates/callback') ?>
                        </div>
                    </div>
                </section>

        </section>
    </div>
</main>

<?php get_footer(); ?>
