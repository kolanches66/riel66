<?php get_header(); ?>

    <main>
        <div class="container">
            <section class="sect services">
                <h2 class="services__header">Услуги</h2>
                <div class="services__container_for_list">
                    <dl class="services__list">
                        <dt class="services__listitem_name">Обмен, покупка, продажа недвижимости </dt>
                        <dt class="services__listitem_name">Покупка квартиры в новостройке без комиссии</dt>
                        <dt class="services__listitem_name">Приватизация</dt>
                        <dt class="services__listitem_name">Перепланировка</dt>
                        <dt class="services__listitem_name">Юридическое сопровождение сделки</dt>
                        <dd class="services__listitem_description">(дарение, продажа, покупка, обмен)</dd>
                    </dl>
                </div>
            </section>

            <section class="sect callback">
                <hr class="callback__divider">
                <div class="callback__content">
                    <h2 class="callback__header">Получить<br>консультацию</h2>
                    <form action="." method="POST">
                        <div class="callback__fields">
                            <p class="callback__paragraph_for_textbox">
                                <input class="callback__textbox" type="text" placeholder="Имя">
                            </p>
                            <p class="callback__paragraph_for_textbox">
                                <input class="callback__textbox" type="text" placeholder="Телефон">
                            </p>
                        </div>
                        <div class="callback__buttons">
                            <button class="callback__buttons__button_submit" type="submit">Получить</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
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
