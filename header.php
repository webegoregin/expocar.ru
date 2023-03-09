<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
        <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri() ?>/img/apple-touch-icon_result.webp">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri() ?>/img/favicon-32x32_result.webp">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri() ?>/img/favicon-16x16_result.webp">
    <title><?php echo wp_title(); ?></title>

    <?php wp_head(); ?>
     <script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>

        <script>
            if (document.documentElement.clientWidth > 1024) {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: -50,
                mobile: true,
                live: true,
                callback: function(box) {},
                scrollContainer: null
            });
            wow.init();

        }

          if (document.documentElement.clientWidth < 1024) {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: -100,
                mobile: true,
                live: true,
                callback: function(box) {},
                scrollContainer: null
            });
            wow.init();
          }
        </script>
</head>

<body>
    <div class="loader"></div>
    <div class="container-header">
        <header>
            <div class="m-auto">
                <a href="/">
                    <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo_result.webp">
                </a>
                <ul class="header-list">
                    <li class="header-list__item menu">
                        <a class="fromCenter">
                            <div class="item__fromCenter">Купить автомобиль</div>
                        </a>
                        <ul class="submenu">
                            <li><a href="https://expocar.ru/cars/new">Новый автомобиль</a></li>
                            <li><a href="https://expocar.ru/cars/used">Автомобиль с пробегом</a></li>
                        </ul>
                    </li>
                    <li class="header-list__item">
                        <a class="fromCenter" target="_blank" href="https://expocar.online/">
                            <div class="item__fromCenter">Продать автомобиль</div>
                        </a>
                    </li>
                    <li class="header-list__item menu">
                        <a class="fromCenter">
                            <div class="item__fromCenter">Услуги</div>
                        </a>
                        <ul class="submenu">
                            <li><a href="/services/">Сервис</a></li>
                            <li><a href="/selection/">Запасные части</a></li>
                            <li><a href="/redemption/">Выездной выкуп</a></li>
                        </ul>
                    </li>
                    <li class="header-list__item menu">
                        <a class="fromCenter">
                            <div class="item__fromCenter">О нас</div>
                        </a>
                        <ul class="submenu">
                            <li><a href="/contacts/">Контакты</a></li>
                            <li><a href="/work/">Вакансии</a></li>
                            <li><a href="/cooperation/">Партнерам</a></li>
                             <li><a href="/useful/">Полезное</a></li>
                            <li><a href="/blog/">Блог</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="header-tel" href="tel:+78007700311">8-800-770-03-11</a>
                <label class="btn-burger">
                    <span></span>
                </label>
            </div>
        </header>
        <div class="block-submenu"></div>