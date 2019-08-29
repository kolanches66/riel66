<?php get_header(); ?>

    <main>

        <div class="container">
            <section class="sect sect_aboutme">
                <h2 class="sect__header">Обо мне</h2>
                <div class="sect__content">
                    <!-- <?= get_option('siteparams')['aboutme']; ?> -->
                    <p class="sect__content__paragraph">Обладаю большим опытом работы на рынке недвижимости Екатеринбурга и Свердловской области. Занимаюсь недвижимостью с 2007 года. Зарегистрирована как индивидуальный предприниматель.</p>
                    <p class="sect__content__paragraph">Связаться со мной и направить мне описание вашего объекта вы можете любым удобным для вас способом: по телефону, электронной почте или через социальные сети.</p>
                </div>
                <p></p>
            </section>
        </div>

        <hr class="divider">
        <div class="container">
            <section class="sect services">
                <h2 class="sect__header">Помогу по вопросам</h2>
                <div class="services__container_for_list">
                    <? get_template_part('templates/questions') ?>
                </div>
            </section>

            <section class="sect sect_callback" id="callback">
                <div class="cont cont_50per">
                    <h2 class="sect__header">Заинтересованы?</h2>
                    <p class="sect__description">Дам бесплатную консультацию по телефону</p>
                    <div class="callback">
                        <? get_template_part('templates/callback') ?>
                    </div>
                </div>
            </section>
        </div>

        <hr class="divider">
        <div class="container">
            <section class="sect reviews">
                <h2 class="sect__header">Отзывы</h2>
                <? get_template_part('templates/reviews') ?>
            </section>
        </div>

        <hr class="divider">
        <div class="container">
            <section class="sect sect_banks">
                <h2 class="sect__header">Сотрудничество с банками</h2>
                <? get_template_part('templates/banks') ?>
            </section>
        </div>

        <hr class="divider">
        <div class="container">
            <section class="sect sect_certs">
                <h2 class="sect__header">Аттестаты</h2>
                <? get_template_part('templates/certs') ?>
            </section>
        </div>

        <!--<hr class="divider">
        <div class="container">
            <section class="sect">
                <h2 class="services__header">Ипотека</h2>
            </section>
        </div>

        <hr class="divider">
        <div class="container">
            <section class="sect">
                <h2 class="services__header">От клиентов</h2>
            </section>
        </div>-->

    </main>

<?php get_footer(); ?>
