<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eden
 */

get_header();
?>

  <div class="" id="middle">

    <?php	while ( have_posts() ) : the_post(); ?>

      <section class="section-2 section-flex">
        <div class="">

          <?php get_template_part( 'template-parts/content', get_post_type('page') ); ?>

        </div>
      </section>

    <?php endwhile; ?>

  </div>

</div> <!-- /main-->

<?php
get_footer();
