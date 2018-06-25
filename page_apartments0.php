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
      <div class="section-1-two section-bedroom">
        <h1>one bedroom units</h1>
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

    <section class="section-2 section-flex">
      <div class="section-one-bedroom section-flex one-bedroom">
        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/onebedrooms/A1.jpg" alt="A1">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type A- 1</h2>
                  <h4>One Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 6 <br>
                    Second Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 1 Bedroom </li>
                    <li> Toilet </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 59 m<sup>2</sup></strong>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/onebedrooms/A1.jpg" alt="A1">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type A- 1</h2>
                  <h4>One Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 6 <br>
                    Second Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 1 Bedroom </li>
                    <li> Toilet </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 59 m<sup>2</sup></strong>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
