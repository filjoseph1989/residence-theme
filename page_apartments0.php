<?php
/**
 * Template Name: Apartment-one-bedrooom
 *
 * This is the template for apartment page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eden
 */

get_header();
?>
 	<div id="middle">
    <div class="headline cmsmasters_color_scheme_default">
      <div class="headline_outer">
        <div class="headline_color"></div>
        <div class="headline_inner align_center">
          <div class="headline_aligner"></div>
          <div class="headline_text">
            <h1 class="entry-title"><?php single_post_title(); ?></h1>
          </div>
          <div class="cmsmasters_breadcrumbs">
            <div class="cmsmasters_breadcrumbs_aligner"></div>
            <div class="cmsmasters_breadcrumbs_inner">
              <a href="/" class="cms_home">Home</a>
              <span class="breadcrumbs_sep"> / </span>
              <?php if (single_post_title('', false) == 'Apartments'): ?>
                <span>Aparment</span>
              <?php else: ?>
                <a href="/apartments" class="cms_home">Apartments</a>
                <span class="breadcrumbs_sep"> / </span>
                <span><?php single_post_title('', true) ?></span>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

 		<div class="">
 		  <div class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
 		    <div class="cmsmasters_row_outer_parent penthouse">
 		      <div class="cmsmasters_row_outer">
            <div class="cmsmasters_row_inner">
              <div class="cmsmasters_row_margin cmsmasters_11">
                <div id="cmsmasters_column_e4fa23546d" class="cmsmasters_column one_first">
                  <div class="cmsmasters_column_inner">
                    <div id="cmsmasters_fb_92fb437567" class="cmsmasters_featured_block">
                      <div class="featured_block_inner">
                        <div class="featured_block_text">
                          <?php
                          while ( have_posts() ) :
                            the_post();

                            the_content();

                          endwhile; // End of the loop.
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 		        <div class="cmsmasters_row_inner">
 		          <div class="cmsmasters_row_margin cmsmasters_11">
 		            <div id="cmsmasters_column_b69484d61c" class="cmsmasters_column one_first">
 		              <div class="cmsmasters_column_inner">
 										<div class="cmsmasters_wrap_portfolio entry-summary">
 											<div class="portfolio grid large_gap perfect cards-parent">
                        <article class="cmsmasters_project_grid project shortcode_animated" style="width: 620px;">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/onebedrooms/A1.jpg" class="full-width wp-post-image" alt="A1">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type A- 1</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>One Bedroom Apartment</h4>
                                <p class="entry-title">
                                  Units Available: 6 <br>
                                  Second Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> Living + Open Kitchen Area </li>
                                    <li> 1 Bedroom </li>
                                    <li> Toilet </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional)</li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 59 m<sup>2</sup></strong>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
                        <article class="cmsmasters_project_grid project shortcode_animated" style="width: 620px;">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/onebedrooms/A2.jpg" class="full-width wp-post-image" alt="A2">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type A-2</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>One Bedroom Apartment </h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Second Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> 1 Master Bedroom </li>
                                    <li> Living + Open Kitchen Area </li>
                                    <li> 1 Den room </li>
                                    <li> Shared Toilet </li>
                                    <li> Laundry Room </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional)</li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 80 m<sup>2</sup></strong>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
 											</div>
 										</div>
 		              </div>
 		            </div>
 		          </div>
 		        </div>

            <div class="cmsmasters_row_inner">
              <div class="cmsmasters_row_margin cmsmasters_11">
                <div id="cmsmasters_column_b69484d61c" class="cmsmasters_column one_first">
                  <div class="cmsmasters_column_inner">
                    <div class="cmsmasters_wrap_portfolio entry-summary">
                      <div class="portfolio grid large_gap perfect cards-parent">
                        <article class="cmsmasters_project_grid project shortcode_animated">
                          <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/onebedrooms/image-1.png" alt="">
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

 		      </div>
 		    </div>
 		  </div>
 		</div>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
