<?php
/**
 * Template Name: Architecture
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
      <div class="headline_outer" id="architecture">
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

    <div class="cmsmasters_row">
      <div class="cmsmasters_row_outer_parent penthouse">
        <div class="cmsmasters_row_inner">
          <div class="cmsmasters_column one_first window">
            <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/window.png" alt="Window">
          </div>
        </div>
      </div>
    </div>

    <div class="cmsmasters_row">
      <div class="cmsmasters_row_outer_parent penthouse">
        <div class="cmsmasters_row_inner">
          <div class="cmsmasters_column one_first">
            <?php
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', get_post_type('page') );

            endwhile; // End of the loop.
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="cmsmasters_row">
      <div class="cmsmasters_row_outer_parent penthouse">
        <div class="cmsmasters_row_inner">
          <div class="cmsmasters_column one_first">
            <img src="<?php echo bloginfo('template_url'); ?>/img/amenities/terrace.jpg" alt="Terrace">
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
