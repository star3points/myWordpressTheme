<?php 

add_action('wp_ajax_notes_get_posts', 'notes_get_posts');
add_action('wp_ajax_nopriv_notes_get_posts', 'notes_get_posts');

function notes_get_posts(){
    wp_reset_postdata();
    $WPquery = new WP_Query();
    $posts = $WPquery -> query(['category_name' => 'notes']);
    foreach($posts as $post): ?>
        <div id = "content-card" class = "card">
            <div class = "card-body">
                <h5 class = "card-title"><?php echo $post -> post_title; ?></h5>
                <p class = "card-text"><?php echo make_clickable($post -> post_content); ?></p>  
            </div>
        </div>
    <?php endforeach;
    wp_die(); 
}
?>