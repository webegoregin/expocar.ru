<?php
/*Template Name: Блог */
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
        <div class="text-banner">
            <h1 class="text-banner__title text-banner__title--news fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title_contacts')?></h1>
        </div>
    </div>
</div>
</div>


<div class="container container-news">

    <?php 
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


    <div class="news__item fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
        <a  href="<?php the_permalink(); ?>">
            <picture>
                <source media=" (max-width: 1024px) and (min-width:576px)" srcset="<?php the_field('576-post')?>"
                    type="image/png">
                <img src="<?php the_field('1200-post')?>" type="image/png">
            </picture>
        </a>
        <div class="news__item-info">
            <a  href="<?php the_permalink(); ?>">
                <div class="news__item-info-date"><?php the_time('j F Y')?></div>
                <div class="news__item-info-title"><?php the_title(); ?></div>
                <div class="news__item-info-text"><?php the_excerpt();?></div>
            </a>
            <div class="social__news">
                <?php $loop1 = CFS()->get('social',160);
                    foreach($loop1 as $row)
                        { 
                    ?>

                <a class="social__item" target="_blank" href="<?= $row['link_social'];?>">
                    <img src=<?= $row['img_social'];?>">
                </a>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>

    <?php endwhile; ?>



    <?php wp_reset_postdata(); ?>




    <div class="btn-two" id="btnNews">
        <a>Показать еще</a>
    </div>
</div>
<?php get_footer(); ?>