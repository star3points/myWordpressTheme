<?php 

add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){
    
	wp_localize_script('validate_note_form', 'myajax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);  

}

//if(wp_doing_ajax())

add_action('wp_ajax_add_new_note', 'add_new_note');
add_action('wp_ajax_nopriv_add_new_note', 'add_new_note');

function add_new_note(){
    $data = [];    
    $response = validate_note_form($data); // &
    echo json_encode($response);
    if($response['res']){
        insert_note_in_db($data);
        //header("Refresh: 0");
    }
    wp_die();
}

function validate_note_form(&$data){ // passing by reference
    $response = ['res' => false, 'errors' => [] ];

    $note_title = trim($_POST['data'][0]['value']);
    $data['title'] = $note_title;
    $note_content = trim($_POST['data'][1]['value']);
    $data['content'] = $note_content;
    $note_id = trim($_POST['data'][2]['value']);
    $data['id'] = $note_id;
    $password = trim($_POST['data'][3]['value']);

    //true - valid value
    $response['errors']['title'] = !($note_title == '') ? true : false;
    $response['errors']['content'] = !($note_content == '') ? true : false;
    $response['errors']['password'] = ($password == 'qwerty123456') ? true : false;

    if($response['errors']['title'] && $response['errors']['content'] && $response['errors']['password']){
        $response['res'] = true;
    }

    return $response;

}

function insert_note_in_db($data){
    //print_r($data);
    //sanitize_text_field() - ?
    $post_data = [
        'post_title'    => $data['title'] ,
        'post_content'  => $data['content'],
        'post_status'   => 'publish',
        'post_category' => [(int)$data['id']]
    ];
    $post_id = wp_insert_post( $post_data );
}

?>
