<?php
/**
 * Template Name: Penthouse
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
                          <p style="text-align: center;">
                            <span style="color: #6a6a6a; font-size: 20px; line-height: 28px;">
                              Situated on the third floor, four exclusive three-bedroom penthouses offer the pinnacle of spacious urban luxury. Designed with expansive outdoor terraces, the Eden Garden penthouses offer instant access to adjacent gym, pool and clubhouse.
                              <br>
                            </span>
                          </p>
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
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/penthouse/D1.jpg" class="full-width wp-post-image" alt="D1">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type D-1</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>Penthouse Apartment </h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Third Floor
                                </p>
                                <p>
                                  <ul>
                                    <li><i class="fas fa-dot-circle"></i> Living + Open Kitchen Area </li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Master Bedrooms </li>
                                    <li><i class="fas fa-dot-circle"></i> Second Bedroom </li>
                                    <li><i class="fas fa-dot-circle"></i> 2 Bathroom en suite </li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Guest Toilet </li>
                                    <li><i class="fas fa-dot-circle"></i> Maid Room </li>
                                    <li><i class="fas fa-dot-circle"></i> Parking </li>
                                    <li><i class="fas fa-dot-circle"></i> Driver’s room (optional) </li>
                                    <li><i class="fas fa-dot-circle"></i> Additional Storage (optional) </li>
                                  </ul>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 107 m<sup>2</sup></strong> <br>
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
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/penthouse/D2.jpg" class="full-width wp-post-image" alt="D2">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type D-2</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>Penthouse Apartment with Terrace</h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Third Floor
                                </p>
                                <p>
                                  <ul>
                                    <li><i class="fas fa-dot-circle"></i> Living + Open Kitchen Area</li>
                                    <li><i class="fas fa-dot-circle"></i> 2 Master Bedrooms</li>
                                    <li><i class="fas fa-dot-circle"></i> 2 Bathroom en suite</li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Guest Toilet</li>
                                    <li><i class="fas fa-dot-circle"></i> Maid Room</li>
                                    <li><i class="fas fa-dot-circle"></i> Parking</li>
                                    <li><i class="fas fa-dot-circle"></i> Driver’s room (optional)</li>
                                    <li><i class="fas fa-dot-circle"></i> Additional Storage (optional)</li>
                                  </ul>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 107 m<sup>2</sup></strong> <br>
                                  <strong>Terrace Area: 22m<sup>2</sup></strong>
                                </p>
                              </div>
                            </header>
                          </div>
                        </article>
 											</div>
 											<div class="portfolio grid large_gap perfect cards-parent">
                        <article class="cmsmasters_project_grid project shortcode_animated" style="width: 620px;">
                          <div class="project_outer">
                            <a href="#">
                              <div class="project_img_wrap">
                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/penthouse/D3.jpg" class="full-width wp-post-image" alt="D3">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type D-3</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>Penthouse apartment with Terrace</h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Third Floor
                                </p>
                                <p>
                                  <ul>
                                    <li><i class="fas fa-dot-circle"></i> Living + Open Kitchen Area </li>
                                    <li><i class="fas fa-dot-circle"></i> 3 Master Bedrooms </li>
                                    <li><i class="fas fa-dot-circle"></i> 3 Bathroom en suite </li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Guest Toilet </li>
                                    <li><i class="fas fa-dot-circle"></i> Maid Room </li>
                                    <li><i class="fas fa-dot-circle"></i> Parking </li>
                                    <li><i class="fas fa-dot-circle"></i> Driver’s room (optional) </li>
                                    <li><i class="fas fa-dot-circle"></i> Additional Storage (optional) </li>
                                  </ul>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 156 m<sup>2</sup></strong> <br>
                                  <strong>Terrace area: 62 m<sup>2</sup></strong>
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
                                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/penthouse/D4.jpg" class="full-width wp-post-image" alt="D4">
                                </figure>
                              </div>
                            </a>
                            <header class="cmsmasters_project_header entry-header">
                              <h3 class="cmsmasters_project_title entry-title">
                                <a href="#">Apartment Type D-4</a>
                              </h3>
                              <div class="cmsmasters_tab_inner">
                                <h4>Penthouse Apartment with Terrace</h4>
                                <p class="entry-title">
                                  Units Available: 2 <br>
                                  Third Floor
                                </p>
                                <p>
                                  <ul>
                                    <li><i class="fas fa-dot-circle"></i> Living + Kitchen Area </li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Master Bedrooms </li>
                                    <li><i class="fas fa-dot-circle"></i> 2 Bedrooms </li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Bathroom en suite </li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Shared Toilet </li>
                                    <li><i class="fas fa-dot-circle"></i> 1 Guest Toilet </li>
                                    <li><i class="fas fa-dot-circle"></i> Maid Room </li>
                                    <li><i class="fas fa-dot-circle"></i> Parking </li>
                                    <li><i class="fas fa-dot-circle"></i> Driver’s room (optional)</li>
                                    <li><i class="fas fa-dot-circle"></i> Additional Storage (optional)</li>
                                  </ul>
                                </p>
                                <p>
                                  <strong>Total Floor Area: 157 m<sup>2</sup></strong> <br>
                                  <strong>Terrace Area: 100 m<sup>2</sup></strong>
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
 		      </div>
 		    </div>
 		  </div>
 		</div>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
