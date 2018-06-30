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
        <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/penthouse.png" alt="Penthouse">
      </div>
      <div class="section-1-two section-bedroom">
        <h1>Penthouses</h1>
      </div>
    </section>

    <section class="section-2 section-flex">
      <div class="bedroom-description">
        <article <?php post_class(); ?>>
          <div class="entry-content section-flex">
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

    <?php $posts = my_get_posts( 'penthouse', 10 ); ?>

    <?php if ($posts !== false): ?>

      <?php foreach ($posts as $key => $value): ?>

        <section class="section-2 section-flex">
          <div class="section-one-bedroom section-flex one-bedroom">

            <?php foreach ($value as $post): setup_postdata( $post ); ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large'); ?>

              <div class="">
                <div class="column-1">
                  <a href="<?php echo get_permalink( get_the_ID() ); ?>">
                    <div class="project_img_wrap">
                      <figure class="">
                        <img src="<?php echo $image[0]; ?>" alt="thumbnail">
                      </figure>
                    </div>
                  </a>
                  <div class="">
                    <article <?php post_class(); ?>>
                      <header class="entry-header">
                        <h2 class="entry-title"><?php echo $post->post_title; ?></h2>
                      </header>
                      <div class="entry-content">
                        <?php echo $post->post_content; ?>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </section>

      <?php endforeach; ?>

    <?php endif; ?>

    <br>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
