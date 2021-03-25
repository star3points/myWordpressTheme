jQuery(document).ready(function($) {
    $('.block-with-hidden-text').click(function () {
        $('.hidden-text', this).toggle(200);
        if ($('.togler', this).hasClass('clicked')){
            $('.togler', this).removeClass('clicked');
            $('.togler', this).html('More');
        } else {
            $('.togler', this).addClass('clicked');
            $('.togler', this).html('Hide');
        }
        
      });

});