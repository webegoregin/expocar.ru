<?php
/*Template Name: Полезное  */
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
            <h1 class="text-banner__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title_contacts')?></h1>
        </div>
    </div>
</div>
</div>
</div>

<div class="container container-useful">
    <div class="useful-filter fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
        <div class="search-block">
            <input id="search" name="search" type="text" placeholder="Поиск темы">
            <div class="submit-search"></div>
        </div>
        <div class="useful__checkbox">
            <?php $loop1 = CFS()->get('list-tag-useful');
            foreach($loop1 as $row){
            ?>
            <div>
                <input type="checkbox" name="tags" id="<?= $row['name-useful']; ?>" value="<?= $row['name-useful']; ?>">
                <label class="useful__checkbox-item" for="<?= $row['name-useful']; ?>">
                    <?= $row['name-useful'];?>
                </label>
            </div>
            <?php
            }
            ?>
        </div>

    </div>


    <div class="article-list" id="paginated-list" data-current-page="1" aria-live="polite">
        <?php $loop1 = CFS()->get('list-useful');
        foreach($loop1 as $row)
            { 
        ?>
        <div class="article-list__item fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" data-value="<?= $row['tag-useful'];?>">
            <div class="article-list__item-info">
                <div class="article-list__item-date">
                    <?=   
                   
                    $date2 = date("j.m.Y", strtotime($row['date-useful']));
                   
                    ?>

                </div>
                <div class="article-list__item-title"><?= $row['name-useful'];?></div>
                <a class="article-list__item-tag"><?= $row['tag-useful'];?></a>
            </div>
            <div class="article-list__text">
                <?= $row['text-useful'];?>
            </div>
        </div>
        <?php 
            }
        ?>
    </div>
    <nav class="pagination-container"></nav>
</div>
<?php get_footer(); ?>