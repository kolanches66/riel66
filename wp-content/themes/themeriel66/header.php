<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/fav.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    
    <? wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

<div class="overlay_popup js-popup-callback _hide">
	<div class="popup">
		<a class="popup__close js-popup-callback-hide">&times;</a>
		<div class="popup__content">
            <h2 class="popup__content__title">Приватизация</h2>
            <div class="popup__content__body">Приватизация — форма преобразования собственности, представляющая собой процесс передачи-продажи (полной или частичной) государственной (муниципальной) собственности в частные руки. В приватизации участвуют минимум две стороны, и обязательно одна из сторон — организация — даже такая, как государство.</div>
		</div>
	</div>
</div>

<header class="welcome" style="background-image: url('<?=get_template_directory_uri();?>/img/welcome3.jpg');">
    <!-- <div class="cont cont_topcontacts">
        <div class="topcontacts__contact icon icon_location">
            <a class="topcontacts__link" href="#">г. Екатеринбург</a>
        </div>
        <div class="topcontacts__contact icon icon_phone">
            <a class="topcontacts__link" href="tel:+79028723894"><?= get_option('siteparams')['phone'] ?></a>
        </div>
        <div class="topcontacts__contact icon icon_email">
        <a class="topcontacts__link" href="mailto:<?= get_option('siteparams')['email'] ?>"><?= get_option('siteparams')['email'] ?></a>
        </div>
    </div> -->
    <div class="cont cont_welcome">
        <div class="welcome__container">
            <div class="welcome__avatar">
                <img class="welcome__avatar__image" src="<?=get_template_directory_uri();?>/img/ponomareva_marina.png" alt="">
            </div>
            <div class="welcome__slogan">
                <h1 class="welcome__slogan__experience">12 лет</h1>
                <h2 class="welcome__slogan__work">работы в недвижимости</h2>
            </div>
        </div>
    </div>
</header>

<nav class="sect menu">
    <ul class="menu__list">
        <li class="menu__listitem"><a class="menu__listitem__link" href="/">Главная</a>
        <?
        $pages = get_pages(); 
        foreach ($pages as $page) { ?>
            <li class="menu__listitem"><a class="menu__listitem__link" href="/?page_id=<?= $page->ID ?>"><?= $page->post_title ?></a>
        <? 
        } 
        ?>
        <!-- <li class="menu__listitem"><a class="menu__listitem__link" href="/?page_id=40">Ипотека</a>
        <li class="menu__listitem"><a class="menu__listitem__link" href="/?page_id=40">Сотрудничество</a> -->
    </ul>
</nav>

<section class="sect sect_contacts">
    <div class="whoami">
        <div class="whoami__description">Агент по недвижимости</div>
        <div class="whoami__name">
            <a class="whoami__name__link" href="/">Пономарева<br>Марина</a>
        </div>
    </div>
    <div class="callme">
        <div class="callme__header">Свяжитесь со мной:</div>
        <div class="callme__icons">
            <div class="callme__icon">
                <a href="tel:+79028723894" class="callme__icon__link">
                    <i class="fas fa-phone"></i>
                </a>
            </div>
            <div class="callme__icon">
                <a href="mailto:ponomarev@riel66.ru" class="callme__icon__link">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
            <div class="callme__icon">
                <a class="callme__icon__link">
                    <i class="fab fa-telegram"></i>
                </a>
            </div>
            <div class="callme__icon">
                <a href="https://wa.me/79028723894" class="callme__icon__link">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<body <?php body_class(); ?>>