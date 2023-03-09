<?php
/*Template Name: Блог Детальная */

// Template Post Type: post, pages
?>

<?php get_header(); ?>

<div class="block-img__absolute">
    <picture>
        <source class="banner" media="(max-width: 1200px) and (min-width:1024px)"
            srcset="<?php the_field('1024_main_contacts',224)?>" type="image/png">
        <source class="banner" media="(max-width: 1024px) and (min-width:576px)"
            srcset="<?php the_field('576_main_contacts',224)?>" type="image/png">
        <source class="banner" media="(max-width: 576px)" srcset="<?php the_field('320_main_contacts',224)?>"
            type="image/png">
        <img class="banner" src="<?php the_field('1200_main_contacts',224)?>" type="image/png">
    </picture>

    <div class="container">
        <div class="text-banner">
            <h1 class="text-banner__title text-banner__title--news fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title_contacts',224)?></h1>
        </div>
    </div>
</div>
</div>


<div class="container container-news">
    <div class="detail-news">
        <div class="detail-news__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_title(); ?></div>
        <div class="detail-news__date fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_time('j F Y')?></div>
        <div class="detail-news__info fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <?php the_field('detail-blog')?>
            <div class="social-detail-news">
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
            <div class="detail-news-controls">
                <div class="prev-news"><?php previous_post_link('%link', 'Предыдущая статья', true); ?></div>
                <a href="/blog/">Все статьи</a>
                <div class="next-news"><?php next_post_link('%link', 'Следующая статья', true); ?></div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>