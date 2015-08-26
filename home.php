<?php
//Lets add our typical WordPress stuff, then fill it all in with some bad-ass layouts inspired by the awesome building blocks Zurb provides

get_header();
?>

<?php //Let's add our Hero section ?>
  
  <section class="hero" style="
    <?php
      if( get_theme_mod( 'mainstreet_hero_bg') ) :
        echo 'background-image:url(' . esc_url( get_theme_mod( 'mainstreet_hero_bg' ) ) . ');';
      else : 
        echo 'background-image: url(/wp-content/themes/mainstreet/assets/img/hero-bg.jpg);"';
      endif;
    ?>
    ">
    <?php get_template_part( 'parts/hero' ); ?>
  </section>

<?php //Now, let's throw in our middle text & photo section ?>

  <section class="home-middle">
  </section>
  
<?php //Time to round it all out with a Home CTA section ?>

  <section class="home-cta">
  </section>

<?php
  get_footer();
?>