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
      <section class="featured-work">
        
    <div id="primary" class="site-content">
          <div class="main-content" role="main">

            <section class="recent-posts clearfix">
              <div class="services-images">
                      <?php if($image_1) {
                          echo wp_get_attachment_image( $image_1, $size );
                      } ?>
              </div>
                <article class="services-description">
                    <aside class="about-page-sidebar">
                        <h2><?php echo $services_title_1; ?></h2>
                        <?php the_content('services_description'); ?>
                    </aside>
                </article>
              </section>
              <section class="recent-posts clearfix">
                  <article class="services-description">
                      <aside class="case-study-sidebar">
                          <h2><?php echo $services_title_2; ?></h2>
                          <?php the_content('services_description_2'); ?>
                      </aside>
                      <div class="services-images">
                              <?php if($image_2) {
                                  echo wp_get_attachment_image( $image_2, $size );
                              } ?>
                      </div>
                  </article>
                </section>
                <section class="recent-posts clearfix">
                  <div class="services-images">
                          <?php if($image_3) {
                              echo wp_get_attachment_image( $image_3, $size );
                          } ?>
                  </div>
                    <article class="services-description">
                        <aside class="about-page-sidebar">
                            <h2><?php echo $services_title_3; ?></h2>
                            <?php the_content('services_description_3'); ?>
                        </aside>
                    </article>
                  </section>
                  <section class="recent-posts clearfix">
                      <article class="services-description">
                          <aside class="case-study-sidebar">
                              <h2><?php echo $services_title_4; ?></h2>
                              <?php the_content('services_description_4'); ?>
                          </aside>
                          <div class="services-images">
                                  <?php if($image_4) {
                                      echo wp_get_attachment_image( $image_4, $size );
                                  } ?>
                          </div>
                      </article>
                    </section>
          <?php endwhile; // end of the loop. ?>
          </div><!-- #content -->
          <div class="contact-us-content">
            <h2>Interested in working with us?</h2>
            <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
          </div><!-- .contact-us-content -->
    </div><!-- #primary -->

    <?php get_footer(); ?>
