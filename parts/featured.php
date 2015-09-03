<?php
//Let's add a cool section for stuff a business might want to highlight
?>
    <div class="row features">
        
      <?php 
        // Let's get number one! 
        if (! dynamic_sidebar('homer-featured-one')):
          dynamic_sidebar('home-featured-one');
        endif;
        
        if (! dynamic_sidebar('homer-featured-two')):
          dynamic_sidebar('home-featured-two');
        endif;
        
        if (! dynamic_sidebar('homer-featured-three')):
          dynamic_sidebar('home-featured-three');
        endif;
      ?>
      
    </div>

<?php
?>