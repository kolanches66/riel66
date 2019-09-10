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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55165312, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55165312" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>

    <div class="overlay_popup js-popup-callback _hide">
        <div class="popup">
            <a class="popup__close js-popup-callback-hide">&times;</a>
            <div class="popup__content">
                <h2 class="popup__content__title">Приватизация</h2>
                <div class="popup__content__body">Приватизация — форма преобразования собственности, представляющая собой процесс передачи-продажи (полной или частичной) государственной (муниципальной) собственности в частные руки. В приватизации участвуют минимум две стороны, и обязательно одна из сторон — организация — даже такая, как государство.</div>
            </div>
        </div>
    </div>

    <div class="whoami">
        <div class="whoami__description">Агент по недвижимости</div>
        <div class="whoami__name">
            <a class="whoami__name__link" href="/">Пономарева<br>Марина</a>
        </div>
    </div>

    <div class="sect_menu__phonecontainer">
        <a href="tel:+79028723894" class="sect_menu__phone icon icon_phone">+7 902 503 23 11</a>
        <a href="mailto:ponomareva@riel66.ru" class="sect_menu__phone icon icon_email">ponomareva@riel66.ru</a>
    </div>

    <!-- <div class="callme">
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
    </div> -->

    <header class="welcome" style="background-image: url('<?=get_template_directory_uri();?>/assets/img/header-bg.jpg');">
        <div class="cont cont_welcome">
            <div class="welcome__container">
                <div class="welcome__avatar">
                    <img class="welcome__avatar__image" src="<?=get_template_directory_uri();?>/assets/img/header-photo.png" alt="">
                </div>
                <div class="welcome__slogan">
                    <h1 class="welcome__slogan__experience">1000</h1>
                    <h2 class="welcome__slogan__work">довольных клиентов</h2>
                </div>
                <div class="welcome__slogan">
                    <h1 class="welcome__slogan__experience">12</h1>
                    <h2 class="welcome__slogan__work">лет в недвижимости</h2>
                </div>
            </div>
        </div>
    </header>

    <nav class="sect sect_menu">
        <? wp_nav_menu(); ?>
    </nav>