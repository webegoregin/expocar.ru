<?php get_header(); ?>


<div class="container container-policy">
    <div class="title-error">404. Страница не найдена</div>
    <div class="text-error">К сожалению, запрашиваемая страница не найдена</div>
    <div class="btn-two">
        <a href="/">Главная страница</a>
    </div>

</div>


<style>
.container-footer {
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 10;
}

@media(max-width:1024px) {
    .container-policy {
        height: 100vh;
        overflow: hidden;
    }
}
</style>

<?php get_footer(); ?>