<?php
/*
Template Name: Product Wall
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
        <div id="" class="waterfall" 	data-col-min-width="350" data-default-container-width="800"	data-autoresize="true">
        	<?php
              //Let's start the query for our post
              query_posts( array ( 'post_type' => 'product_post', 'posts_per_page' => 6, 'order' => 'DESC' ) );
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
                      <a href="<?php echo esc_url( get_permalink() ); ?>">See More</a>
                    </div>
                    
              				<?php
              				//Time to close it out!
              				echo '</div></div>';
              	endwhile;
              	wp_reset_query();
              ?>
        </div>
	</div>
</div>

<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>
