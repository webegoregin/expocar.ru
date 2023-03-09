    <div class="overlay js-open-services">
        <div class="popup-services js-popup-services">
            <div class="popup-title">Заполните форму, пожалуйста</div>
            <div class="message-error">Заполните все обязательные поля в форме</div>
            <div class="form">
                <input class="input input-name" id="username" type=" text" placeholder="Имя*" required>
                <input id="tel" class="input tel input-tel" pattern="^[1-9]\d*$" type="tel" placeholder="+7*" required>

                <div class="select-box">
                    <div class="options-container-dealer" id="City">
                        <?php $loop1 = CFS()->get('city_select',160);
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

                    <div class="selected-dealer" id="cityForm">
                        Город*
                    </div>
                </div>
                <div class="select-box">
                    <div class="options-container-dealer" id="Brand">
                    </div>

                    <div class="selected-dealer" id="brandForm">
                        Марка*
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="277" title="Сервис"]'); ?>


                <div class="close-popup js-close"></div>
            </div>
        </div>
        <div class="popup-succesful">
            <div class="message-form">Спасибо, с вами свяжемся!</div>

            <div class="close-popup js-close"></div>
        </div>
    </div>


    <div class="cookies__container">
        <div class="cookies-block">
            <div class="cookies__text">
                Этот сайт использует файлы cookie для хранения данных. Продолжая использовать сайт, вы даете свое
                согласие на работу с
                этими файлами.
            </div>
            <div class="cookies__btn">
                <a>Хорошо</a>
            </div>
        </div>
    </div>
    <div class="container container-footer">
        <footer>
            <div class="block__footer fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="flex-grow">
                    <img class="logo-footer"
                        src="<?php echo get_template_directory_uri() ?>/img/logo-black_result.webp">
                    <div class="policy-footer">
                        Все права защищены
                        <script>
                        document.write(`${new Date().getFullYear()}`);
                        </script>
                    </div>
                </div>
                <div class="flex-end">
                    <div class="social__footer">
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
                    <div class="policy-footer">
                        <a href="/policy/">Политика конфиденциальности</a>
                    </div>
                </div>
            </div>

            <p class="text-footer fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
                Вся представленная на&nbsp;сайте информация, касающаяся стоимости автомобилей, запасных частей,
                аксессуаров сервисного обслуживания и&nbsp;прочих услуг, носит информационный характер и&nbsp;не&nbsp;является публичной
                офертой,
                определяемой
                положениями
                ст.
                437 (2) ГК&nbsp;РФ. Для получения подробной информации обращайтесь в&nbsp;наши автосалоны.
                Опубликованная на&nbsp;данном сайте информация может быть изменена в&nbsp;любое время без
                предварительного
                уведомления.
            </p>

            <div class="policy-footer-mobile fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <a href="/policy/">Политика конфиденциальности</a>
            </div>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/slick/slick.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/cookie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
        type="text/javascript"></script>



    <?php wp_footer(); ?>
    </body>

    </html>