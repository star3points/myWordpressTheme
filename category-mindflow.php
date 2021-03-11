<?php
get_header();
?>

<div id = "content">

    <?php while (have_posts()): 
            the_post(); ?>               
                <div class = "card">
                    <div class = "card-body">
                        <h5 class = "card-title"><?php the_title();?></h5>
                        <p class = "card-text"><?php the_content();?></p>
                    </div>
                </div>      
        <?php endwhile; ?>

</div>

<?php
get_footer();
?>