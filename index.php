<?php get_header(); ?>

<div class="block-img__absolute">
    <picture>
        <source class="banner" media="(max-width: 1200px) and (min-width:1024px)"
            srcset="<?php the_field('1024-main')?>" type="image/png">
        <source class="banner" media="(max-width: 1024px) and (min-width:576px)" srcset="<?php the_field('576-main')?>"
            type="image/png">
        <source class="banner" media="(max-width: 576px)" srcset="<?php the_field('320-main')?>" type="image/png">
        <img class="banner" src="<?php the_field('1200-main')?>" type="image/png">
    </picture>

    <div class="container">
        <div class="text-banner">
            <h1 class="text-banner__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title')?></h1>
            <div class="text-banner__subtitle fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('text')?></div>
            <div class="banner__btn fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <a href="https://expocar.ru/cars/new">В магазин</a>
            </div>
        </div>
    </div>
</div>

</div>

<div class="container-cars">
    <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.2s" id="newsCars">Новые автомобили</div>
    <div class="slick__slider">
        <div class="slider slider__list slider-new-nav fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <?php $loop1 = CFS()->get('cars-new');
                foreach($loop1 as $row){
            ?>
            <div class="item" data-href="<?= $row['link'];?>"><?= $row['model'];?></div>
            <?php 
                }
            ?>
        </div>

        <div class="slider__img fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
            <div class="slider slider-new-img">
                <?php $loop1 = CFS()->get('cars-new');
                    foreach($loop1 as $row){
                ?>
                <div class="slides"><img src="<?= $row['img-cars'];?>"></div>
                <?php 
                    }
                ?>

            </div>
        </div>
        <div class="btn-two fadeInUp wow" data-wow-duration="0.3s" data-wow-delay="0.2s" id="btnCarsNew">
            <a href="https://expocar.ru/cars/new">Купить</a>
        </div>
    </div>
</div>

<div class="section-rating">
    <picture>
        <source class="banner" media="(max-width: 1200px) and (min-width:1024px)"
            srcset="<?php the_field('1024-main-2')?>" type="image/png">
        <source class="banner" media="(max-width: 1024px) and (min-width:576px)"
            srcset="<?php the_field('576-main-2')?>" type="image/png">
        <source class="banner" media="(max-width: 576px)" srcset="<?php the_field('320-main-2')?>" type="image/png">
        <img class="banner" src="<?php the_field('1200-main-2')?>" type="image/png">
    </picture>
    <div class="container">
        <div class="text-rating-banner">
            <h1 class="rating__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" ><?php the_field('title-2')?></h1>
            <div class="rating__subtitle fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('text-2')?></div>
            <div class="banner__btn fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <a target="_blank" href="https://expocar.online/">Оценить</a>
            </div>
        </div>
    </div>
</div>

<div class="container-cars">
    <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.2s" id="aspCars">Автомобили с&nbspпробегом</div>
    <div class="slick__slider">
        <div class="container-asp-nav fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <div class="slider slider__list slider-asp-nav">
                <?php $loop1 = CFS()->get('cars-asp');
                  foreach($loop1 as $row){
                ?>
                <div class="item" data-href="<?= $row['link'];?>"><?= $row['carcase'];?></div>
                <?php 
                    }
                ?>
            </div>
        </div>

        <div class="slider__img-asp fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
            <div class="slider slider-asp-img">
                <?php $loop1 = CFS()->get('cars-asp');
                    foreach($loop1 as $row){
                ?>
                <div class="slides">
                    <img class="asp__img" src="<?= $row['img-cars'];?>">
                    <div class="cars-asp__list-option">
                        <div class="list-option__name"><?= $row['model'];?></div>
                        <div><?= $row['options'];?></div>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
        <div class="btn-two fadeInUp wow" data-wow-duration="0.3s" data-wow-delay="0.3s" id="btnCarsAsp">
            <a target="_blank" href="https://expocar.ru/cars/used">Купить</a>
        </div>
    </div>
</div>

<div class="container container-services">
    <div class="block-services">
        <div class="block-services_title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title-3')?></div>
        <div class="text fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('text-3')?></div>
        <div class="btn-two open-services fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
            <a>Записаться</a>
        </div>
    </div>
    <picture class="fadeInUp wow" data-wow-duration="1.2s" data-wow-delay="0.3s">
        <source class="img" media="(max-width: 1200px) and (min-width:1024px)" srcset="<?php the_field('1024-main-3')?>"
            type="image/png">
        <source class="img" media="(max-width: 1024px) and (min-width:576px)" srcset="<?php the_field('576-main-3')?>"
            type="image/png">
        <source class="img" media="(max-width: 576px)" srcset="<?php the_field('320-main-3')?>" type="image/png">
        <img class="img" src="<?php the_field('1200-main-3')?>" type="image/png">
    </picture>
</div>

<div class="container-center">
    <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"> <?php the_field('title-4')?></div>
    <img class="selection-img fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s" src="<?php the_field('1200-main-4')?>">
    <div class="btn-two fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
        <a target="_blank" href="https://expocar.store/">Подобрать</a>
    </div>
</div>

<div class="container-grid-img">
    <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= the_field('title-5');?></div>
    <div class="grid">
        <?php $loop1 = CFS()->get('item');
            foreach($loop1 as $row){
        ?>
        <a href="<?= $row['link-item'];?>" class="grid_item fadeInUp wow" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="animation__img">
                <picture>
                    <source media="(max-width: 576px)" srcset="<?= $row['img-item'];?>" type="image/png">
                    <img src="<?= $row['img-item-mb'];?>" type="image/png">
                </picture>
            </div>
            <div class="text"><?= $row['name-item'];?></div>
        </a>
        <?php 
            }
        ?>

        <div class="btn-two show-btn">
            <a>Показать еще</a>
        </div>

    </div>
</div>




<?php get_footer(); ?>