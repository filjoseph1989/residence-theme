<?php
/**
 * Template Name: Apartments
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
      <div class="headline_outer" id="apartment">
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

    <section class="section-1 section-flex section-location section-flex--column">
      <div class="section-1-one">
        <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/chairtwo.png" alt="chair image">
      </div>
      <div class="section-1-two section-apartment">
        <h1>intelligent apartment design for convenient living</h1>
      </div>
    </section>

    <section class="section-2 section-flex">
      <div class="">
        <article <?php post_class(); ?>>
          <div class="entry-content">
            <?php
            while ( have_posts() ) :
              the_post();

              the_content();

            endwhile; // End of the loop.
            ?>
          </div>
        </article>
      </div>
    </section>

    <br>

    <div class="cmsmasters_row_inner">
      <div class="cmsmasters_row_margin">
        <div class="cmsmasters_column one_fourth rooms">
          <div class="cmsmasters_column_inner">
            <div id="cmsmasters_fb_ef07ee5e3c" class="cmsmasters_featured_block">
              <div class="featured_block_inner">
                <div class="featured_block_text">
                  <div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                    <a href="<?php echo get_page_link(41); ?>">
                      <h2 class="cmsmasters_heading">One Bed Room</h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cmsmasters_column one_fourth rooms">
          <div class="cmsmasters_column_inner">
            <div id="cmsmasters_fb_e81afc63a2" class="cmsmasters_featured_block">
              <div class="featured_block_inner">
                <div class="featured_block_text">
                  <div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                    <a href="<?php echo get_page_link(43); ?>">
                      <h2 class="cmsmasters_heading">Two Bed Rooms</h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cmsmasters_column one_fourth rooms">
          <div class="cmsmasters_column_inner">
            <div id="cmsmasters_fb_659c48ffe6" class="cmsmasters_featured_block">
              <div class="featured_block_inner">
                <div class="featured_block_text">
                  <div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                    <a href="<?php echo get_page_link(45); ?>">
                      <h2 class="cmsmasters_heading">Three Bed Rooms</h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cmsmasters_column one_fourth rooms">
          <div class="cmsmasters_column_inner">
            <div id="cmsmasters_fb_725e32fff3" class="cmsmasters_featured_block">
              <div class="featured_block_inner">
                <div class="featured_block_text">
                  <div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                    <a href="<?php echo get_page_link(47); ?>">
                      <h2 class="cmsmasters_heading">Penthouses</h2>
                    </a>
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

 </div> <!-- /main-->

 <?php get_footer();
