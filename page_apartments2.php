<?php
/**
 * Template Name: Apartment-three-bedrooom
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
            <div class="cmsmasters_row">
              <div class="cmsmasters_row_outer_parent penthouse">
                <div class="cmsmasters_row_inner">
                  <div class="cmsmasters_row_margin cmsmasters_11">
                    <div class="cmsmasters_column one_first window">
                      <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/bedroomthree.png" alt="Chair Three">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cmsmasters_row_inner">
              <div class="cmsmasters_row_margin cmsmasters_11">
                <div class="cmsmasters_column one_first">
                  <div class="cmsmasters_column_inner">
                    <div class="cmsmasters_featured_block">
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
                      <div class="portfolio grid large_gap perfect cards-parent bed-room">
                        <article class="cmsmasters_project_grid project shortcode_animated">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C1.jpg" class="full-width wp-post-image" alt="">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type C- 1</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>3 Bedroom Apartment with Garden</h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Ground Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> Living + Open Kitchen Area </li>
                                    <li> 3 Master Bedrooms </li>
                                    <li> 1 Bathroom en suite </li>
                                    <li> 1 Shared Bathroom </li>
                                    <li> Guest Toilet </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional)</li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 108 m<sup>2</sup></strong> <br>
                                  <strong>Terrace Area: 32 m</strong>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
                        <article class="cmsmasters_project_grid project shortcode_animated">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C2.jpg" class="full-width wp-post-image" alt="">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type C- 2</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>3 Bedroom Apartment with Garden</h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Third Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> Living + Open Kitchen Area </li>
                                    <li> 3 Master Bedrooms </li>
                                    <li> 1 Bathroom en suite </li>
                                    <li> 1 Shared Bathroom </li>
                                    <li> Guest Toilet </li>
                                    <li> Maid Room </li>
                                    <li> Laundry Room </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional)</li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 136 m<sup>2</sup></strong> <br>
                                  <strong>Terrace Area: 45 m</strong>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
                      </div>
                      <div class="portfolio grid large_gap perfect cards-parent bed-room">
                        <article class="cmsmasters_project_grid project shortcode_animated">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C3.jpg" class="full-width wp-post-image" alt="">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type C-3</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>3 Bedroom Apartment</h4>
                                <p class="entry-title">
                                  Units Available: 4 <br>
                                  First and Second Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> Living + Open Kitchen Area </li>
                                    <li> 1 Master Bedrooms </li>
                                    <li> 2 Bedrooms </li>
                                    <li> 1 Bathroom en suite </li>
                                    <li> 1 Shared Bathroom </li>
                                    <li> Guest Toilet </li>
                                    <li> Maid Room </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional)</li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 136 m<sup>2</sup></strong> <br>
                                  <strong>Terrace Area: 32 m<sup>2</sup></strong>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
                        <article class="cmsmasters_project_grid project shortcode_animated">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C4.jpg" class="full-width wp-post-image" alt="C4">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type C-4</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>3 Bedroom Apartment</h4>
                                <p class="entry-title">
                                  Units Available: 4 <br>
                                  First and Second Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> Living + Open Kitchen Area </li>
                                    <li> 3 Master Bedrooms </li>
                                    <li> 3 Bathroom en suite </li>
                                    <li> 1 Guest Toilet </li>
                                    <li> Maid Room </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional)</li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 159 m<sup>2</sup></strong> <br>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
                      </div>
                      <div class="portfolio grid large_gap perfect cards-parent bed-room">
                        <article class="cmsmasters_project_grid project shortcode_animated">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C5.jpg" class="full-width wp-post-image" alt="">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type C-5</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>3 Bedroom Apartment</h4>
                                <p class="entry-title">
                                  Units Available: 4 <br>
                                  First and Second Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> Living + Open Kitchen Area </li>
                                    <li> 3 Master Bedrooms </li>
                                    <li> 1 Bathroom en suite </li>
                                    <li> 1 Guest Toilet </li>
                                    <li>  Maid Room </li>
                                    <li> Laundry Room </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional)</li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 143 m<sup>2</sup></strong> <br>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
                        <article class="cmsmasters_project_grid project shortcode_animated">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C6.jpg" class="full-width wp-post-image" alt="">
                                  <a href="/"></a>
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type C-6</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>3 Bedroom Apartment</h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Second Floor
                                </p>
                                <p>
                                  <ol>
                                    <li> Living + Open Kitchen Area  </li>
                                    <li> 1 Master Bedrooms </li>
                                    <li> 2 Bedrooms </li>
                                    <li> 1 Bathroom en suite </li>
                                    <li> 1 Shared Bathroom </li>
                                    <li> 1 Guest Toilet </li>
                                    <li> Maid Room </li>
                                    <li> Parking </li>
                                    <li> Driver’s room (optional) </li>
                                    <li> Additional Storage (optional) </li>
                                  </ol>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 108 m<sup>2</sup></strong> <br>
                                  <strong>Terrace Area: 32 m<sup>2</sup></strong>
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

              <div class="cmsmasters_row_margin cmsmasters_11 cmsmasters_12-flex">
                <a href="<?php echo get_page_link(61); ?>">
                  <button type="button" class="btn btn-default">More</button>
                </a>
              </div>

              <br><br>

 		        </div>
 		      </div>
 		    </div>
 		  </div>
 		</div>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
