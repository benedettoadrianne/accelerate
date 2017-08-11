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
    		<div class="homepage-hero">
          <h3>Accelerate is a strategy and marketing agency<br>located in the heart of NYC. Our goal is to build<br>businesses by making our clients visible and<br>making their customers smile.</h3>
         	</div>
        </section><!-- .home-page -->
        <div id="primary" class="site-content">
         		<div class="main-content-about" role="main">
                <h4 style="text-align: center;">Our Services</h4>
                <p style="text-align: center;">We take pride in our clients and the content we create for them.<br>Here’s a brief overview of our offered services.</p>
              <?php query_posts('posts_per_page=10&post_type=our_services'); ?>
              <?php while ( have_posts() ) : the_post();
                $image = get_field('image');
                $services = get_field('service_description');
                $size = "medium";?>

              <article class="about-our-services">
                <aside class="about-sidebar">
                  <h4><?php the_title(); ?></h4>
                      <?php the_content(); ?>
                </aside>
   									<div id="about-images">
                      <?php if($image) {
                          echo wp_get_attachment_image( $image, $size );
                      } ?>
  									</div>
  							</article>

              <?php endwhile; //end of loop. ?>
              <?php wp_reset_query(); //resets the altered query back to the original ?>
            </ul>
          </div><!-- #content -->

      </div><!-- #primary -->

         		<div class="contact-us-about-page">
              <div class="work-with-us">
                    <h2>Interested in working with us?</h2>
                  </div>
                <div class="about-page-button">
                    <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
                  </div>
                  </div><!-- .contact-us-about-page -->

    <?php get_footer(); ?>
