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

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/normalize.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/styles.css">
</head>

<body>

<section class="topcontacts">
    <div class="container contacts_container">
        <div class="topcontacts__contact">
            <div class="topcontacts__icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="topcontacts__text"><a class="topcontacts__link" href="#">г. Екатеринбург</a></div>
        </div>
        <div class="topcontacts__contact">
            <div class="topcontacts__icon"><i class="fas fa-phone"></i></div>
            <div class="topcontacts__text"><a class="topcontacts__link" href="tel:+79028723894">+7 902 87 23 894</a></div>
        </div><div class="topcontacts__contact">
            <div class="topcontacts__icon"><i class="fas fa-envelope"></i></div>
            <div class="topcontacts__text"><a class="topcontacts__link" href="mailto:ponomareva@riel66.ru">ponomareva@riel66.ru</a></div>
        </div>
    </div>
</section>

<section class="welcome">
    <div class="welcome__darkness">
        <h1 class="welcome__experience">12 лет</h1>
        <h2 class="welcome__work">работы в недвижимости</h2>
        <div class="welcome__avatar">
            <img class="welcome__avatar__image" src="<?=get_template_directory_uri();?>/img/ponomareva_marina.png" alt="">
        </div>
    </div>
</section>

<header class="sect header">
    <div class="header__container">
        <div class="header__whoami">
            <div class="header__whoami__description">Агент по недвижимости</div>
            <div class="header__whoami__lastname">Пономарева</div>
            <div class="header__whoami__firstname">Марина</div>
        </div>
        <div class="header__contacts">
            <div class="header__contacts__callme">Свяжитесь со мной:</div>
            <div class="header__contacts__icons">
                <div class="header__contacts__icons__icon">
                    <a href="tel:+79028723894" class="header__contacts__icons__iconlink">
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
                <div class="header__contacts__icons__icon">
                    <a href="mailto:ponomarev@riel66.ru" class="header__contacts__icons__iconlink">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
                <div class="header__contacts__icons__icon">
                    <a class="header__contacts__icons__iconlink">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
                <div class="header__contacts__icons__icon">
                    <a href="https://wa.me/79028723894" class="header__contacts__icons__iconlink">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!--    <hr class="header__divider">-->
</header>
<body <?php body_class(); ?>>