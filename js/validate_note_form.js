jQuery(document).ready(function($) {

    $('.add_new_note').on('submit', function(e){ 
        e.preventDefault(); //cancel default event (dont send form)
        var form = $(this); //jQuery object
        var data = form.serializeArray(); //array with data from form
        

        $('#input_note_title_id').keydown(function(){
            $('#input_note_title_id').removeClass('is-invalid').removeClass('is-valid');
        });
        $('#input_note_content_id').keydown(function(){
            $('#input_note_content_id').removeClass('is-invalid').removeClass('is-valid');
        });
        $('#input_note_password_id').keydown(function(){
            $('#input_note_password_id').removeClass('is-invalid').removeClass('is-valid');
        });

        //$.post doesnt work?
        $.ajax({
            url: myajax.url, 
            data : {
                action: 'add_new_note',
                data: data},
            method: "POST",
            success: function(response){
                var answer = JSON.parse(response);
                if (!answer.res){
                    var errors = answer.errors;
                    console.log(errors);
                    errors.title ? $('#input_note_title_id').removeClass('is-invalid').addClass('is-valid') 
                    : $('#input_note_title_id').removeClass('is-valid').addClass('is-invalid');
                    errors.content ? $('#input_note_content_id').removeClass('is-invalid').addClass('is-valid') 
                    : $('#input_note_content_id').removeClass('is-valid').addClass('is-invalid');
                    errors.password ? $('#input_note_password_id').removeClass('is-invalid').addClass('is-valid') 
                    : $('#input_note_password_id').removeClass('is-valid').addClass('is-invalid');
                    
                } else {
                    $('.add_new_note').trigger('reset');
                    $('#input_note_title_id').removeClass('is-valid');
                    $('#input_note_content_id').removeClass('is-valid');
                    $('#input_note_password_id').removeClass('is-valid');
                    $('#category-notes-content').empty();
                    $.ajax({
                        url: myajax.url,
                        data : {
                            action: 'notes_get_posts'},
                        method: "POST",
                        success: function(response){
                            alert('done!');
                            $('#category-notes-content').html(response);

                        }


                    });
                    
                }
            }

        });
   
    });

});
