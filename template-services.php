<?php
/*Template Name: Шаблон страниц услуг  */
?>
<?php get_header(); ?>
<div class="block-img__absolute">
    <picture>
        <source class="banner" media="(max-width: 1200px) and (min-width:1024px)"
            srcset="<?php the_field('1024_uslugi') ?>" type="image/png">
        <source class="banner" media="(max-width: 1024px) and (min-width:576px)"
            srcset="<?php the_field('576_uslugi') ?>" type="image/png">
        <source class="banner" media="(max-width: 576px)" srcset="<?php the_field('320_uslugi') ?>" type="image/png">
        <img class="banner" src="<?php the_field('1200_uslugi') ?>" type="image/png">
    </picture>



    <div class="container">
        <div class="text-banner">
            <h1 class="text-banner__title text-banner__title-selection fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title_uslugi') ?></h1>
            <div class="text-banner__subtitle fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('text_uslugi') ?></div>
            <div class="banner__btn fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <a target="_blank"
                    href="<?php the_field('link_button-uslugi') ?>"><?php the_field('name_button-uslugi') ?></a>
            </div>
        </div>
    </div>
</div>

</div>

<?php get_footer(); ?>