<div class="cta"
    <?php
      if( get_theme_mod( 'mainstreet_cta_bg') ) :
        echo 'style=background-image:url("' . esc_url( get_theme_mod( 'mainstreet_cta_bg' ) ) . '")';
      else :
        echo 'style=background-image:url("/wp-content/themes/mainstreet/assets/img/product-shot.jpg")';
      endif;
      ?>
      >
    <div class="image-wrapper">
        <div class="row">
    
          <div class="small-12 medium-6 columns">
            <div class="callout-card alert radius">
                
              <div class="card-label">
                <div class="label-text">
                  info
                </div>
              </div>
                  
                <?php
                if ( ! dynamic_sidebar('cta-content')) :
                    dynamic_sidebar('cta-content');
                endif;
                ?>
            </div>
          </div>
        </div>
    </div>
</div>