     <?php
/*Template Name: Вакансии  */
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
             <div class="text-banner text-banner-work">
                 <h1 class="text-banner__title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"> <?php the_field('title_contacts')?></h1>
             </div>
         </div>
     </div>
     </div>
     </div>

     <div class="container container-info-company">
         <?php $loop1 = CFS()->get('list-work');
            foreach($loop1 as $row){
        ?>

         <div class="container-info-company__item">
             <div class="item-text fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= $row['text-item-work'];?>
             </div>
             <div class="item-number fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s"><?= $row['number-item-work'];?></div>
             <div class="item-city fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s"><?= $row['name-item-work'];?></div>
         </div>
         <?php 
            }
        ?>


     </div>

     <div class="section-absolute">
         <picture>
             <source class="banner" media="(max-width: 1200px) and (min-width:1024px)"
                 srcset="<?php the_field('1024-work')?>" type="image/png">
             <source class="banner" media="(max-width: 1024px) and (min-width:576px)"
                 srcset="<?php the_field('576-work')?>" type="image/png">
             <source class="banner" media="(max-width: 576px)" srcset="<?php the_field('320-work')?>" type="image/png">
             <img class="banner" src="<?php the_field('1200-work')?>" type="image/png">
         </picture>
         <div class="container">
             <div class="container-absolute">
                 <div class="container-absolute__text container-absolute__block-top fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
                     <?php the_field('text-banner-work')?></div>
                 <div class="container-absolute__text container-absolute__block-bottom fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
                     <?php the_field('text-banner-work-2')?>
                 </div>
             </div>

         </div>
     </div>

     <div class="container container-importance">
         <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.5s"> <?php the_field('title-list-work')?></div>
         <?php $loop1 = CFS()->get('list_work-2');
            foreach($loop1 as $row){
        ?>
         <div class="importance-grid__item fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">
             <div class="importance-grid__item-number fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.5s">0<div></div>
             </div>
             <div class="importance-grid__item-name fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.6s"><?= $row['name-item-work'];?></div>
             <div class="importance-grid__item-text fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.6s"><?= $row['text-item-work'];?></div>
         </div>
         <?php 
            }
        ?>

     </div>



     <div class="container container-vacancy">
         <div class="container-vacancy__info">
             <div class="title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">Вакансии</div>
             <div class="vacancy_title fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.4s">Сейчас мы ищем в команду</div>
         </div>
         <div class="section-vacancy">
             <div class="vacancy__list">
                 <?php $loop1 = CFS()->get('list-job');
                    foreach($loop1 as $row){
                ?>
                 <div class="vacancy__list-item fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.5s">
                     <div class="vacancy__list-item-city"><?= $row['city-job'];?></div>
                     <?php 
                        $loop2 = $row['specialization-list'];

                        foreach($loop2 as $row2){
                            
                    ?>
                     <a target="_blank" href="<?= $row2['specialization-list-link'];?>"
                         class="vacancy__list-item-name fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.5s"><?= $row2['specialization-list-name'];?></a>
                     <?php 
                        }
                    ?>

                 </div>
                 <?php 
                    }
                ?>
             </div>

         </div>
     </div>
     <script> 
	

	
</script>
<?php get_footer(); ?>