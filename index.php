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
            <div class = "col-4 ">
                <h4>text text text</h4>
                <p>
                Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. 
                </p>
            </div>
            <div class = "col-4">
                <h4>text text text</h4>
                <p>
                Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. 
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
                        Description
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
                        Description
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
                        Description
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


