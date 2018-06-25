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
      <div class="headline_outer" id="lifetyle">
        <div class="headline_color"></div>
        <div class="headline_inner">
          <div class="headline_aligner"></div>
          <div class="headline_text">
            <h1 class="entry-title"><?php single_post_title(); ?></h1>
          </div>
          <div class="cmsmasters_breadcrumbs">
            <div class="cmsmasters_breadcrumbs_aligner"></div>
            <div class="cmsmasters_breadcrumbs_inner">
              <a href="/" class="cms_home">Home</a>
              <span class="breadcrumbs_sep"> / </span>
              <span><?php single_post_title('', true) ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section-1 section-flex section-flex--column">
      <div class="section-1-one">
        <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/penthouse.png" alt="Penthouse">
      </div>
      <div class="section-1-two">
        <h1>your lifestyle, reimagined</h1>
      </div>
    </section>

    <section class="section-2 section-flex">
      <div class="">
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
    </section>

    <br>

    <section class="section-3 section-flex--center">
      <div class="">
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
    </section>

    <br>

    <section class="section-4 section-flex--center">
      <div class="">

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
                  <div class="cmsmasters_slider_post_inner"></div>
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
                  <div class="cmsmasters_slider_post_inner"></div>
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
                  <div class="cmsmasters_slider_post_inner"></div>
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
                  <div class="cmsmasters_slider_post_inner"></div>
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
    </section>
  </div>

 </div> <!-- /main-->

 <?php get_footer();
