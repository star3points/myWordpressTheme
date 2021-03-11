<?php 
get_header();
?>

<div id = "content" class = "row">
    <div class = "col-8">
        <h3><?php echo category_description(); ?></h3>

        <div id = "content-card" class = "card">
            <div class = "card-body">
            <form id = "add_new_note" action = "myfunctions/add_note" method = "post">
                <div class = "form">
                        <div class = "form-group">
                            <input class = "form-control form-control" type = "text" name = "note_title" placeholder = "Note title">
                        </div>
                        <div class = "form-group">
                            <input class = "form-control" type="text-area" name = "note_content" placeholder="Note">
                        </div>
                        
                        <div class = "form-group">
                            <select class = "form-control" name = "category_id">
                                <option value = "7">Notes with art galleries and platforms</option>
                                <option value = "8">Notes with books</option>
                                <option value = "5">Notes with films, TV series, anime etc</option>
                                <option value = "9">Notes with lectures</option>
                                <option value = "6">Notes with social media, blogs, sites etc</option>
                                <option value = "10">Other notes</option>
                            </select>
                        </div>
                   
                    <div class = "form-group row">
                        <div class = "col-10">
                            <input type = "password" class="form-control form-control-sm" type = "text" name = "password" placeholder = "password">
                        </div>
                        <div class = "col-2">
                            <button class = "btn btn-secondary btn-sm" type = "submit">Add note</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>


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

<?php
get_footer();
?>