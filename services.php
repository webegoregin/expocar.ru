<?php
/*Template Name: Сервис */
?>
<?php get_header(); ?>

<div class="block-img__absolute">
    <?php 

    $image1200 = get_field('1200-main-services');
    $image1024 = get_field('1024-main-services');
    $image576 = get_field('576-main-services');
    $image320 = get_field('320-main-services');
    
    $size = 'full';


    ?>
    <picture>
        <source class="banner" media="(max-width: 1200px) and (min-width:1024px)"
            srcset="<?= wp_get_attachment_image_url($image1024, $size );?>" type="image/png">
        <source class="banner" media="(max-width: 1024px) and (min-width:576px)"
            srcset="<?= wp_get_attachment_image_url($image576, $size );?>" type="image/png">
        <source class="banner" media="(max-width: 576px)" srcset="<?= wp_get_attachment_image_url($image320, $size );?>"
            type="image/png">
        <img class="banner" src="<?= wp_get_attachment_image_url($image1200, $size );?>" type="image/png">
    </picture>

    <div class="container">
        <div class="text-banner">
            <h1 class="text-banner__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= the_field('title_services');?></h1>
            <div class="text-banner__subtitle fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= the_field('text_banner-services');?></div>
            <div class="banner__btn open-services fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <a>Записаться</a>
            </div>
        </div>
    </div>
</div>

</div>

<div class="container slider-services">
    <div class="slick__slider slider__container">
        <div class="slider sliderServices">
            <?php $loop1 = CFS()->get('element-services');
            foreach($loop1 as $row){
        ?>
            <div class="item slider-services__item">
                <img class="fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" src="<?= $row['img-card-services'];?>">
                <p class="slider-services__text fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= $row['text-card-services'];?></p>
            </div>
            <?php 
            }
        ?>

        </div>
    </div>
</div>

<div class="container container-control">
    <div class="control__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= the_field('title-contacts-services');?></div>
    <div class="control__content">
        <div class="control__content-text fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= the_field('text-contacts-services');?></div>
        <div class="btn-two control__content-btn open-quality fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
            <a>Связаться</a>
        </div>
    </div>
</div>

<div class="overlay js-open-quality">
    <div class="popup-services js-popup-quality">
        <div class="popup-title">Контроль качества</div>
        <div class="message-error">Заполните все обязательные поля в форме</div>
        <div class="form form-two">
            <?php echo do_shortcode('[contact-form-7 id="293" title="Контроль качества"]'); ?>

            <div class="close-popup js-close"></div>
        </div>
    </div>
    <div class="popup-succesful">
        <div class="message-form">Спасибо, с вами свяжемся!</div>

        <div class="close-popup js-close"></div>
    </div>
</div>

<?php get_footer(); ?>