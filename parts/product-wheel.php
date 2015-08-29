<div class="owl-carousel owl-theme">
  <?php
   //Let's generate some images here
    query_posts( array ( 'post_type' => 'product_post', 'posts_per_page' => 8, 'order' => 'ASC' ) );
    while (have_posts()) : the_post(); //Make sure there are posts to get
    ?>
    <a href="<?php echo esc_url( get_permalink() ); ?>">
      <div class="image">
        <?php
          the_post_thumbnail('medium');
        ?>
        <div class="product-title">
          <?php the_title(); ?>
        </div>
      </div>
    </a>
      <?php
    endwhile;
    wp_reset_query();
  ?>
</div>
<div class="owl-carousel owl-theme">
<?php
    //Let's generate some images here . . . hmm, deja vu . . . 
    query_posts( array ( 'post_type' => 'product_post', 'posts_per_page' => 8, 'order' => 'DESC' ) );
    while (have_posts()) : the_post(); //Make sure there are posts to get
    ?>
    <a href="<?php echo esc_url( get_permalink() ); ?>">
      <div class="image">
        <?php
          the_post_thumbnail('medium');
        ?>
        <div class="product-title">
          <?php the_title(); ?>
        </div>
      </div>
    </a>
      <?php
    endwhile;
    wp_reset_query();
  ?>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
      $('.owl-carousel').owlCarousel({
          responsive:{
              0:{
                  items:1,
                  nav:true
              },
              600:{
                  items:3,
                  nav:false
              },
              1000:{
                  items:5,
                  nav:true,
                  loop:false
              }
          },
          nav: false,
          loop: true,
      })
    });
</script>