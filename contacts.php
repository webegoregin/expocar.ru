<?php
/*Template Name: Контакты  */
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

<div class="container container-about">
    <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('title_office')?></div>
    <div class="office-block">
        <div class="office-block__center fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
            <div class="office-block__center-flex mr">
                <p class="text adress"><?php the_field('adress_office')?></p>
                <a href="<?php the_field('e-mail-office')?>" class="text">info@expocar.ru</a>
            </div>
            <div class="office-block__center-flex">
                <p class="text bold">Пресс-служба</p>
                <a href="<?php the_field('e-mail_pr')?>" class="text"><?php the_field('e-mail_pr')?></a>
            </div>
        </div>
        <div class="office-block__center mt fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <div class="office-block__center-flex mr">
                <p class="text bold">Стать партнером:</p>
                <a href="<?php the_field('e-mail-partner')?>" class="text">hello@expocar.ru</a>
            </div>
            <div class="office-block__center-flex">
                <p class="text bold">Подписывайтесь</p>
                <div class="social__footer social__office">
                    <?php $loop1 = CFS()->get('social');
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
        <div class="office-block__bottom"></div>
    </div>
</div>

<div class="container">
    <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">Дилерские центры</div>
    <div class="filter fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
        <div class="select-container fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <div class="select-container__box">
                <div class="select-box">
                    <div class="options-container-dealer" id="optionCity">
                        <?php $loop1 = CFS()->get('city_select');
                    foreach($loop1 as $row)
                        { 
                    ?>
                        <label><input type="radio" class="radio" value="<?= $row['value_city'];?>" name="city" />
                            <?= $row['name_city'];?>
                        </label>
                        <?php 
                        }
                    ?>
                    </div>

                    <div class="selected-dealer" id="city">
                        Город
                    </div>
                </div>
            </div>
            <div class="select-container__box">
                <div class="select-box">
                    <div class="options-container-dealer" id="optionBrand">
                        <?php $loop1 = CFS()->get('brand-select');
                    foreach($loop1 as $row)
                        { 
                    ?>
                        <label><input type="radio" class="radio" value="<?= $row['name-brand'];?>" name="brand" />
                            <?= $row['name-brand'];?>
                        </label>

                        <?php 
                        }
                    ?>
                    </div>

                    <div class="selected-dealer" id="brand">
                        Марка
                    </div>
                </div>
            </div>
        </div>
        <div class="checkbox-container">
            <div class="checkbox-cars">
                <input class="input-checkbox" id="checkbox-new" name="new" type="checkbox">
                <label class="" for="checkbox-new">Новый автомобиль</label>
            </div>
            <div class="checkbox-cars">
                <input class="input-checkbox" id="checkbox-asp" name="asp" type="checkbox">
                <label class="" for="checkbox-asp">Автомобиль с пробегом</label>
            </div>
        </div>
    </div>
    <div class="container-dealer">
        <div class="container-new-dealer">
            <div class="dealer__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">Новые автомобили</div>

            <div class="list-dealers">
                <?php $loop1 = CFS()->get('dealer-list');
                    foreach($loop1 as $row)
                        { 
                    ?>
                <div class="list-dealers__item  <?= $row['brand-filter-dealer'];?> <?= $row['city-filter-dealer'];?> fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <p class="list-dealers__item-name bold"><?= $row['name-dealer'];?></p>
                    <p class="list-dealers__item-adress"><?= $row['adress-dealer'];?></p>
                    <p class="list-dealers__item-work"><?= $row['work-dealer'];?></p>
                    <a class="list-dealers__item-tel" href="tel:<?= $row['tel-dealer'];?>"><?= $row['tel-dealer'];?></a>
                </div>
                <?php 
                        }
                    ?>
            </div>
        </div>
        <div class="container-asp-dealer">
            <div class="dealer__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">Автомобили с пробегом</div>
            <div class="list-dealers">
                <?php $loop1 = CFS()->get('list-dealer-asp');
                    foreach($loop1 as $row)
                        { 
                    ?>
                <div class="list-dealers__item  <?= $row['city-filter-dealer'];?> fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <p class="list-dealers__item-name bold"><?= $row['name-dealer'];?></p>
                    <p class="list-dealers__item-adress"><?= $row['adress-dealer'];?></p>
                    <p class="list-dealers__item-work"><?= $row['work-dealer'];?></p>
                    <a class="list-dealers__item-tel" href="tel:<?= $row['tel-dealer'];?>"><?= $row['tel-dealer'];?></a>
                </div>
                <?php 
                        }
                    ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>