<?php get_header(); ?>

<div id = "content" class = "row">


    <div class = "col-8">
        <h3><?php echo category_description(); ?></h3>
        <?php 
        while(have_posts()):
            the_post();?>
            <div id = "content-card" class = "card">
                <div class = "card-body">
                    <h5 class = "card-title"><?php the_title(); ?></h5>
                    <p class = "card-text"><?php echo make_clickable(get_the_content()); ?></p>  
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <div class = "col-4">
        <?php get_sidebar(); ?>
    </div>

</div>


<?php get_footer(); ?>