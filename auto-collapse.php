
/* ----- Custom Admin Folded ----- */
function custom_admin_folded() { ?>
  <script>
  jQuery.noConflict();
  (function( $ ) {
  
  // Start code using $ as alias to jQuery   
  $(document).ready(function() {
    $('body').addClass('folded');
  });
  // End code using $ as alias to jQuery
  
  // Start code using $ as alias to jQuery   
  $(function() {
    $('#adminmenuwrap').hover(function() {
    $('body').removeClass('folded');
    });
    $('#wpcontent').hover(function() {
    $('body').addClass('folded');    
    });
  });
  // End code using $ as alias to jQuery
  
  })(jQuery);
  </script>  
  <?php
  }
  
  add_action( 'admin_head','custom_admin_folded' );
