<div class="row intro">
    
    <div class="small-centered medium-uncentered medium-6 large-7 columns">
      <?php
          if ( is_active_sidebar('home-hero') ) :
            dynamic_sidebar('home-hero');
          else :
            echo '<h1>Cannot Find Anything!</h1><p>Add some content, or we will be very, very sad forever</p>';
          endif;
      ?>
    </div>
    
    <div class="small-centered medium-uncentered medium-6 large-5 columns">
      <div class="tech-img"
      <?php
      if( get_theme_mod( 'mainstreet_home_hero') ) :
        echo 'style=background-image:url("' . esc_url( get_theme_mod( 'mainstreet_home_hero' ) ) . '")';
      else :
        echo 'style=background-image:url("/wp-content/themes/mainstreet/assets/img/product-shot.jpg")';
      endif;
      ?>
        >
      </div>
    </div>
    
    <?php
      if ( ! dynamic_sidebar('home-hero-buttons') ) :
        dynamic_sidebar('home-hero-buttons');
      endif;
    ?>
      
  </div>