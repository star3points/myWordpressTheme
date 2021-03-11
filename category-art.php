<?php
get_header();
?>

<!-- fields from plugin Advanced Custom Fields -->

<div id = "content">
    <div id = "card-colums-art" class = "card-columns">
        <?php while (have_posts()): 
            the_post(); ?>               
                <div class = "card" id = "cards-with-art">
                    <img class="card-img-top" src="<?php echo get_field('image')['sizes']['medium'];?>" alt="Card image">
                    <div class = "card-body">
                        <h5 class = "card-title"><?php echo get_field('img_name');?></h5>
                        <p class = "card-text"><?php echo get_field('author');?></p>
                        <p class = "card-text"><?php echo get_field('year');?></p>
                    </div>
                </div>      
        <?php endwhile; ?>
    </div>
</div>

<?php
get_footer();
?>