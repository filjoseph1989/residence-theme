<?php
/**
 * Template Name: Sitemap
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
              <span><?php single_post_title('', true) ?></span>
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

            <br><br>

 		      </div>
 		    </div>
 		  </div>
 		</div>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
