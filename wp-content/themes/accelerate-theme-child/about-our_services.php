<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>
 <section class="home-page">
   <?php while ( have_posts() ) : the_post();
         $image_1 = get_field('image_1');
         $image_2 = get_field('image_2');
         $image_3 = get_field('image_3');
         $image_4 = get_field('image_4');
         $size = "full";
         $services = get_field('services_title');?>
         <div class="homepage-hero">
                  <div class="site-content">
                    <?php the_content(); ?>
                  </div><!-- .site-content -->
                <?php endwhile; // end of the loop. ?>
              </div>

         	<div id="primary" class="site-content">
         		<div class="main-content" role="main">
         			<?php query_posts('posts_per_page=10&post_type=our_services'); ?>
         				<?php while ( have_posts() ) : the_post(); ?>
         					<?php the_content(); ?>
         				<?php endwhile; // end of the loop. ?>
         			<?php wp_reset_query(); ?>
         		</div><!-- #content -->
         		<div class="contact-us-content">
                    <h2>Interested in working with us?</h2>
                    <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
                  </div><!-- .contact-us-content -->
         	</div><!-- #primary -->
    

    <?php get_footer(); ?>
