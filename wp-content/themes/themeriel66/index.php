<?php get_header(); ?>

    <main>

        <div class="container">
            <section class="sect">
                <h2 class="sect__header">Обо мне</h2>
                <div class="sect__content">
                    <!-- <?= get_option('siteparams')['aboutme']; ?> -->
                    <p class="sect__content__paragraph">Обладаю большим опытом работы на рынке недвижимости Екатеринбурга и Свердловской области. Занимаюсь недвижимостью с 2007 года. Зарегистрирована как индивидуальный предприниматель.</p>
                    <p class="sect__content__paragraph">Связаться со мной и направить мне описание вашего объекта вы можете любым удобным для вас способом: по телефону, электронной почте или через социальные сети.</p>
                </div>
                <p></p>
            </section>
        </div>

        <hr class="container__divider">
        <div class="container">
            <section class="sect services">
                <h2 class="sect__header">Помогу по вопросам</h2>
                <div class="services__container_for_list">
                    <? get_template_part('template-questions') ?>
                </div>
            </section>

            <section class="sect callback">

                <div class="callback__content">
                    <?=do_shortcode('[mp_feedback_form]');?>
                </div>

            </section>
        </div>

        <!--<hr class="container__divider">
        <div class="container">
            <section class="sect">
                <h2 class="services__header">Ипотека</h2>
            </section>
        </div>

        <hr class="container__divider">
        <div class="container">
            <section class="sect">
                <h2 class="services__header">От клиентов</h2>
            </section>
        </div>-->

    </main>

<!--	<main role="main">-->
<!--		<section>-->
<!---->
<!--			<h1>--><?php //_e( 'Latest Posts', 'html5blank' ); ?><!--</h1>-->
<!---->
<!--			--><?php //get_template_part('loop'); ?>
<!---->
<!--			--><?php //get_template_part('pagination'); ?>
<!---->
<!--		</section>-->
<!--	</main>-->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
