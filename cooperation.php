<?php
/*Template Name: Партнерам  */
?>
<?php get_header(); ?>

<div class="block-img__absolute">
    <picture>
        <source class="banner" media="(max-width: 1200px) and (min-width:1024px)"
            srcset="<?php the_field('1024_main_contacts')?>" type="image/png">
        <source class="banner" media="(max-width: 1024px) and (min-width:576px)"
            srcset="<?php the_field('576_main_contacts')?>" type="image/png">
        <source class="banner" media="(max-width: 576px)" srcset="<?php the_field('320_main_contacts')?>"
            type="image/png">
        <img class="banner" src="<?php the_field('1200_main_contacts')?>" type="image/png">
    </picture>

    <div class="container">
        <div class="text-banner text-banner__partner">
            <h1 class="text-banner__title text-banner__title-partner fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title_contacts')?></h1>
            <div class="text-banner__subtitle fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('text_subtitle_about')?></div>
        </div>
    </div>
</div>
</div>


<div class="container container-partner">
    <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">Выберете область сотрудничества</div>
    <div class="container-partner__list">
       
        <div class="container-partner__item partner__item-all   fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="Запасные части">Запасные части</div>
        <div class="container-partner__item partner__item-it fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="IT">IT</div>
        <div class="container-partner__item partner__item-all fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="Аксессуары">Аксессуары</div>
        <div class="container-partner__item partner__item-marketing  fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="Маркетинг">Маркетинг</div>
        <div class="container-partner__item partner__item-all fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="Расходные материалы для автомобиля">Расходные материалы<br> для автомобиля</div>
        <div class="container-partner__item partner__item-finance  fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="Финансовые услуги">Финансовые услуги</div>
        <div class="container-partner__item partner__item-all fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="Логистика">Логистика</div>
        <div class="container-partner__item partner__item-all fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="Сервисное обслуживание">Сервисное обслуживание</div>
        
    </div>
</div>

<div class="overlay js-open-cooperations">
    <div class="popup-services js-popup-cooperations">
        <div class="popup-title">Заполните форму, пожалуйста</div>
        <div class="message-error">Заполните все обязательные поля в форме</div>
        <div class="form form-two">
              <?php echo do_shortcode('[contact-form-7 id="276" title="Партнерам"]'); ?>

            <div class="close-popup js-close"></div>
        </div>
    </div>
      <div class="popup-succesful popup-succesful-all">
        <div class="message-form">Спасибо, с вами свяжемся!</div>

        <div class="close-popup js-close"></div>
    </div>
</div>

<div class="overlay js-open-cooperations-it">
    <div class="popup-services js-popup-cooperations-it">
        <div class="popup-title">Заполните форму, пожалуйста</div>
        <div class="message-error">Заполните все обязательные поля в форме</div>
        <div class="form form-two">
              <?php echo do_shortcode('[contact-form-7 id="365" title="Партнерам_it"]'); ?>

            <div class="close-popup js-close"></div>
        </div>
    </div>
      <div class="popup-succesful popup-succesful-it">
        <div class="message-form">Спасибо, с вами свяжемся!</div>

        <div class="close-popup js-close"></div>
    </div>
</div>

<div class="overlay js-open-cooperations-marketing">
    <div class="popup-services js-popup-cooperations-marketing">
        <div class="popup-title">Заполните форму, пожалуйста</div>
        <div class="message-error">Заполните все обязательные поля в форме</div>
        <div class="form form-two">
              <?php echo do_shortcode('[contact-form-7 id="368" title="Партнерам_marketing"]'); ?>

            <div class="close-popup js-close"></div>
        </div>
    </div>
      <div class="popup-succesful popup-succesful-marketing">
        <div class="message-form">Спасибо, с вами свяжемся!</div>

        <div class="close-popup js-close"></div>
    </div>
</div>

<div class="overlay js-open-cooperations-finance">
    <div class="popup-services js-popup-cooperations-finance">
        <div class="popup-title">Заполните форму, пожалуйста</div>
        <div class="message-error">Заполните все обязательные поля в форме</div>
        <div class="form form-two">
              <?php echo do_shortcode('[contact-form-7 id="369" title="Партнерам_finance"]'); ?>

            <div class="close-popup js-close"></div>
        </div>
    </div>
      <div class="popup-succesful popup-succesful-finance">
        <div class="message-form">Спасибо, с вами свяжемся!</div>

        <div class="close-popup js-close"></div>
    </div>
</div>
<?php get_footer(); ?>