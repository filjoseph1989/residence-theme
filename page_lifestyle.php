<?php
/**
 * Template Name: Lifestyle
 *
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
                      <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/penthouse.png" alt="Penthouse">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cmsmasters_row_inner">
              <div class="cmsmasters_row_margin cmsmasters_11">
                <div id="cmsmasters_column_e4fa23546d" class="cmsmasters_column one_first">
                  <div class="cmsmasters_column_inner">
                    <div id="cmsmasters_fb_92fb437567" class="cmsmasters_featured_block">
                      <div class="featured_block_inner">
                        <div class="featured_block_text">
                          <article <?php post_class(); ?>>
                          	<header class="entry-header">
                              <h1 class="entry-title">Retail</h1>
                          	</header>

                          	<div class="entry-content">
                              <p>Welcome to vibrant street-level life, and the last word in urban convenience. </p>
                              <p>At Eden Residence, the ground floor makes room for a retail ecosystem that serves residents’ needs – with commercial access completely separate from the building’s living space.</p>
                              <p>The master plan makes room for a bakery, coffee shop, laundromat, minimart, salon, barbershop and pharmacy, with an ATM also installed at street level.</p>
                              <p>Not only does Eden Residence give small business a chance to serve a captive audience, but also delivers a mix of essential services and retail options to maximise convenience for residents.</p>
                            </div>

                            <footer class="entry-footer">&nbsp;</footer>
                          </article>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cmsmasters_row_inner">
              <div class="cmsmasters_row_margin cmsmasters_11">
                <div id="cmsmasters_column_e4fa23546d" class="cmsmasters_column one_first">
                  <div class="cmsmasters_column_inner">
                    <div id="cmsmasters_fb_92fb437567" class="cmsmasters_featured_block">
                      <div class="featured_block_inner">
                        <div class="featured_block_text">
                          <article <?php post_class(); ?>>
                          	<header class="entry-header">
                              <h1 class="entry-title">Amenities</h1>
                          	</header>

                          	<div class="entry-content">
                              <p>Eden Residence sets a new benchmark for intelligent amenities integrated within the project design. The ground floor hosts two guest lobbies  - one for each block within the project. Meanwhile, residents benefit from exclusive private access from lift lobbies situated in the basement parking lot.</p>
                              <p>The building opens up to the outdoors with generous communal terraces for outdoor activities and communal gatherings. Children enjoy two play areas, indoors and outdoors. Meanwhile, a dedicated clubhouse becomes the centre of the community and can be hired for special events with catering offered by the ground-floor bakery and coffee shop.</p>
                              <p>Eden Residence also offers a full complement of health facilities, with a world-class gym outfitted with TechnoGym equipment, and a rooftop pool situated for maximum privacy. Towel service comes as standard.</p>
                              <p>Other life-enhancing amenities include fire alarms and CCTV security, and round the clock cleaning and maintenance capabilities delivered by resident staff. The basement level also makes room for accommodation for drivers and house help.</p>
                            </div>

                            <footer class="entry-footer">&nbsp;</footer>
                          </article>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="two">
              <div class="">
                <div class="">
                  <div class="cmsmasters_row_inner">
                    <div class="cmsmasters_row_margin">
                      <div class="cmsmasters_column one_first">
                        <div class="cmsmasters_column_inner">
                          <div class="cmsmasters_posts_slider" >
                            <div id="cmsmasters_slider_d4f1fb80d1" class="cmsmasters_owl_slider owl-carousel" data-items="3" data-pagination="false" data-navigation="true" data-single-item="false" data-auto-play="5000">
                              <div class="cmsmasters_owl_slider_item">
                                <article class="cmsmasters_slider_post post-285 post type-post status-publish format-gallery has-post-thumbnail hentry category-advice post_format-post-format-gallery">
                                  <div class="cmsmasters_slider_post_outer">
                                    <header class="cmsmasters_slider_post_header entry-header">
                                      <h3 class="cmsmasters_slider_post_title entry-title">
                                        <a href="#">Gym</a>
                                      </h3>
                                    </header>
                                    <div class="cmsmasters_slider_post_inner">
                                      <footer class="cmsmasters_slider_post_footer entry-meta">
                                        <span class="cmsmasters_comments cmsmasters_slider_post_comments"></span>
                                      </footer>
                                      <div class="cmsmasters_slider_post_cont_info entry-meta">
                                        <span class="cmsmasters_slider_post_category">
                                          <a href="#" class="cmsmasters_cat_color cmsmasters_cat_32" rel="category tag"></a>
                                        </span>
                                      </div>
                                    </div>
                                    <figure class="cmsmasters_img_rollover_wrap preloader">
                                      <img width="580" height="420" src="<?php bloginfo('template_url'); ?>/img/amenities/gym2.jpg" class="full-width wp-post-image" alt="Leave Your Wallet at Home" title="Leave Your Wallet at Home" />
                                      <a href="#" title="Leave Your Wallet at Home" class="cmsmasters_open_link"></a>
                                    </figure>
                                    <div class="cmsmasters_slider_post_content entry-content">
                                      <p>&nbsp;</p>
                                    </div>
                                  </div>
                                </article>
                              </div>

                              <div class="cmsmasters_owl_slider_item">
                                <article id="post-87" class="cmsmasters_slider_post post-87 post type-post status-publish format-image has-post-thumbnail hentry category-health category-relaxation post_format-post-format-image">
                                  <div class="cmsmasters_slider_post_outer">
                                    <header class="cmsmasters_slider_post_header entry-header">
                                      <h3 class="cmsmasters_slider_post_title entry-title">
                                        <a href="#">Gym</a>
                                      </h3>
                                    </header>
                                    <div class="cmsmasters_slider_post_inner">
                                      <footer class="cmsmasters_slider_post_footer entry-meta">
                                        <span class="cmsmasters_comments cmsmasters_slider_post_comments">
                                        </span>
                                      </footer>
                                      <div class="cmsmasters_slider_post_cont_info entry-meta">
                                        <span class="cmsmasters_slider_post_category">
                                          <a href="#" class="cmsmasters_cat_color cmsmasters_cat_37" rel="category tag"></a>,
                                          <a href="#" class="cmsmasters_cat_color cmsmasters_cat_33" rel="category tag"></a>
                                        </span>
                                      </div>
                                    </div>
                                    <figure class="cmsmasters_img_rollover_wrap preloader">
                                      <img width="580" height="420" src="<?php bloginfo('template_url'); ?>/img/amenities/gym3.jpg" class="full-width wp-post-image" alt="Healthier, Happier You" title="Healthier, Happier You" />
                                      <a href="#" title="Healthier, Happier You" class="cmsmasters_open_link"></a>
                                    </figure>
                                    <div class="cmsmasters_slider_post_content entry-content">
                                      <p>&nbsp;</p>
                                    </div>
                                  </div>
                                </article>
                              </div>

                              <div class="cmsmasters_owl_slider_item">
                                <article id="post-1965" class="cmsmasters_slider_post post-1965 post type-post status-publish format-image has-post-thumbnail hentry category-health category-special-offers post_format-post-format-image">
                                  <div class="cmsmasters_slider_post_outer">
                                    <header class="cmsmasters_slider_post_header entry-header">
                                      <h3 class="cmsmasters_slider_post_title entry-title">
                                        <a href="#">Swimming Pool</a>
                                      </h3>
                                    </header>
                                    <div class="cmsmasters_slider_post_inner">
                                      <footer class="cmsmasters_slider_post_footer entry-meta">
                                        <span class="cmsmasters_comments cmsmasters_slider_post_comments">
                                        </span>
                                      </footer>
                                      <div class="cmsmasters_slider_post_cont_info entry-meta">
                                        <span class="cmsmasters_slider_post_category">
                                          <a href="#" class="cmsmasters_cat_color cmsmasters_cat_37" rel="category tag"></a>,
                                          <a href="#" class="cmsmasters_cat_color cmsmasters_cat_35" rel="category tag"></a>
                                        </span>
                                      </div>
                                    </div>
                                    <figure class="cmsmasters_img_rollover_wrap preloader">
                                      <img width="580" height="420" src="<?php bloginfo('template_url'); ?>/img/amenities/swimming_pool2.jpg" class="full-width wp-post-image" alt="Active Holidays" title="Active Holidays" />
                                      <a href="#" title="Active Holidays" class="cmsmasters_open_link"></a>
                                    </figure>
                                    <div class="cmsmasters_slider_post_content entry-content">
                                      <p>&nbsp;</p>
                                    </div>
                                  </div>
                                </article>
                              </div>

                              <div class="cmsmasters_owl_slider_item">
                                <article id="post-106" class="cmsmasters_slider_post post-106 post type-post status-publish format-image has-post-thumbnail hentry category-food category-relaxation post_format-post-format-image">
                                  <div class="cmsmasters_slider_post_outer">
                                    <header class="cmsmasters_slider_post_header entry-header">
                                      <h3 class="cmsmasters_slider_post_title entry-title">
                                        <a href="#">Terrace</a>
                                      </h3>
                                    </header>
                                    <div class="cmsmasters_slider_post_inner">
                                      <footer class="cmsmasters_slider_post_footer entry-meta">
                                        <span class="cmsmasters_comments cmsmasters_slider_post_comments">
                                        </span>
                                      </footer>
                                      <div class="cmsmasters_slider_post_cont_info entry-meta">
                                        <span class="cmsmasters_slider_post_category">
                                          <a href="#" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag"></a>,
                                          <a href="#" class="cmsmasters_cat_color cmsmasters_cat_33" rel="category tag"></a>
                                        </span>
                                      </div>
                                    </div>
                                    <figure class="cmsmasters_img_rollover_wrap preloader">
                                      <img width="580" height="420" src="<?php bloginfo('template_url') ?>/img/amenities/terrace.jpg" class="full-width wp-post-image" alt="All-Inclusive Thrills" title="All-Inclusive Thrills" />
                                      <a href="#" title="All-Inclusive Thrills" class="cmsmasters_open_link"></a>
                                    </figure>
                                    <div class="cmsmasters_slider_post_content entry-content">
                                      <p>&nbsp;</p>
                                    </div>
                                  </div>
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

            <br><br>


 		      </div>
 		    </div>
 		  </div>
 		</div>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
