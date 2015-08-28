<!-- Masonry Container -->
<div class="row">
  <div class="large-12 columns">
    <div id="" class="waterfall" 	data-col-min-width="350" data-default-container-width="800"	data-autoresize="true">
      
     <?php
      //Let's start the query for our post
      query_posts( array ( 'category_name' => 'home-featured', 'posts_per_page' => 8, 'order' => 'DESC' ) );
      	while (have_posts()) : the_post(); //Make sure there are posts to get
      			echo '<div class="grid-brick"><div class="card">';
      			if ( the_post_thumbnail() ):
      			  ?>
      			  <div class="image">
                <?php the_post_thumbnail('medium'); ?>
              </div>
            <?php
      			endif;
      			?>
      			<div class="content">
      			  <span class="title"><?php the_title() ?></span>
              <?php the_content(); ?>
            </div>
            <div class="action">
              <a href="<?php echo esc_url( get_permalink(1) ); ?>">See More</a>
            </div>
            
      				<?php
      				//Time to close it out!
      				echo '</div></div>';
      	endwhile;
      ?>
      
  </div>
</div>
