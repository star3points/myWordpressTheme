<?php get_header('landing'); ?>

<section id = "first-section-landing">
    <header id = landingNavBar>
            <div id = "header-landing">
                <nav class = "navbar navbar-expand-sm bg-transparent navbar-dark sticky-top">
                    <a class = 'navbar-brand' href = "/">My logo </a>
                        <?php wp_nav_menu(['theme_location' => 'header',
                        'menu_class' => 'navbar-nav',
                        'container' => 'ul']);?>
                        
                </nav>
            </div>
    </header>
    <div class = "container-fluid">
        <div id = "first-section-landing-content" class = "row justify-content-center ">
            <!-- <style> background-image: url('/landing_img/background_landing.jpg');</style> -->
            <div class = "col-5">
                <h4>Junior PHP разработчик</h4>
                <p>
                Добрый день. Меня зовут Сергей и я ищу работу web разработчика. Буду рад работать и развиваться в вашей компании.
                </p>
            </div>
            <div class = "col-3">
                <h4>Инструменты</h4>
                <p>
                PHP, MySQL<br>
                HTML, CSS, Bootstrap<br>
                Javascript, jQuery<br>
                Wordpress, Bitrix<br>
                </p>
            </div>
        </div>
    </div>

</section>

<section id = "second-section-landing">
    <div class = "container-fluid">
        <div class = "section-head row justify-content-center">
            <div class = "col-6">
                <h4 class="text-center">About my knowlege</h4>
            </div>
        </div>
        <div class = "second-section-landing-item row justify-content-center">
            <div class = "col-1">
                <img src = <?php echo get_template_directory_uri()."/landing_img/php-icon.jpeg"; ?> width = "100%">
            </div>
            <div class = "col-7">
                <h5>PHP SQL</h5>               
                <div class = "block-with-hidden-text">
                    <span class = "togler text-primary">More</span>
                    <p class = "hidden-text">
                        Простейший сайт (блог) на php. Реализация паттерна MVC.
                        Статьи хранятся в виде отдельных html файлов (что, как я понимаю, не правильно).
                        В базе 2 таблицы: таблица пользователей и комментариев.
                        Пользователь может зарегистрироваться, авторизоваться.
                        Авторизованный пользователь может комментировать статьи и удалять свои комментарии.
                        <br><a href = "https://github.com/star3points/MampBlog">Код</a>
                    </p>
                </div>
            </div>
        </div>
        <div class = "second-section-landing-item row justify-content-center">
            <div class = "col-1">
                <img src = <?php echo get_template_directory_uri()."/landing_img/bitrix-icon.png"; ?> width = "100%">
            </div>
            <div class = "col-7">
                <h5>Bitrix</h5>               
                <div class = "block-with-hidden-text">
                    <span class = "togler text-primary">More</span>
                    <p class = "hidden-text">
                        Для вывода информации из инфоблоков и навигации использовал компоненты:
                        menu<br>
                        main.include<br>
                        news.list 
                        news.detail<br>
                        catalog.section 
                        catalog.section.list
                        <br><a href = "https://github.com/star3points/MyPetBitrix">Код</a>
                    </p>
                </div>
            </div>
        </div>
        <div class = "second-section-landing-item row justify-content-center">
            <div class = "col-1">
                <img src = <?php echo get_template_directory_uri()."/landing_img/wordpress-icon.png"; ?> width = "100%">
            </div>
            <div class = "col-7">
                <h5>Wordpress</h5>               
                <div class = "block-with-hidden-text">
                    <span class = "togler text-primary">More</span>
                    <p class = "hidden-text">
                        Этот сайт. 
                        Помимо вывода записей реализовано добавление записей(notes) через web интерфейс, AJAX валидация формы добавления записи.
                        <br><a href = "https://github.com/star3points/myWordpressTheme">Код</a>
                    </p>
                </div>
            </div>
        </div>
        
    </div>    
    <!-- my knowlege -->
</section>

<section id = "third-section-landing">
    <div class = "container-fluid">
        <div class = "section-head row justify-content-center">
            <div class = "col-6">
                <h4 class="text-center">Contact me</h4>
            </div>
        </div>
        <div class = "row justify-content-center">
            <div class = "col-3">
                <h5 class="text-center"><img src = <?php echo get_template_directory_uri()."/landing_img/hh-icon.png"; ?> height = "30px">
                HeadHunter</h5>
                <p class="text-center">
                    <a href = "https://spb.hh.ru/resume/fe6c5554ff067981630039ed1f636a79746c46">Моё резюме на HH</a>
                </p>
            </div>
            <div class = "col-3">
                <h5 class="text-center"><img src = <?php echo get_template_directory_uri()."/landing_img/github-icon.png"; ?> height = "30px">
                GitHub</h5>
                <p class="text-center">
                    <a href = "https://github.com/star3points">Мой GitHub</a>
                </p>
            </div>
            <div class = "col-3">
                <h5 class="text-center"><img src = <?php echo get_template_directory_uri()."/landing_img/email-icon.png"; ?> height = "30px">
                e-mail</h5>
                <p class="text-center">
                    aleksczech@yandex.ru
                </p>
            </div>
        </div>
    </div>
    <!-- contact me -->
</section>

<?php get_footer(); ?>


