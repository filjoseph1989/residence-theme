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
        <h1>three bedroom units</h1>
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
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C1.jpg" class="" alt="">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type C- 1</h2>
                  <h4>3 Bedroom Apartment with Garden</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Ground Floor
                  </p>
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
                  <p>
                    <strong>Total Floor Area: 108 m<sup>2</sup></strong> <br>
                    <strong>Terrace Area: 32 m</strong>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap extra-height">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C2.jpg" class="" alt="">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type C- 2</h2>
                  <h4>3 Bedroom Apartment with Garden</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Third Floor
                  </p>
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
                  <p>
                    <strong>Total Floor Area: 136 m<sup>2</sup></strong> <br>
                    <strong>Terrace Area: 45 m</strong>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br>

    <section class="section-2 section-flex">
      <div class="section-one-bedroom section-flex one-bedroom">
        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C3.jpg" class="" alt="">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type C-3</h2>
                  <h4>3 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 4 <br>
                    First and Second Floor
                  </p>
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
                  <p>
                    <strong>Total Floor Area: 136 m<sup>2</sup></strong> <br>
                    <strong>Terrace Area: 32 m<sup>2</sup></strong>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap extra-height" id="c4">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C4.jpg" class="" alt="C4">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type C-4</h2>
                  <h4>3 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 4 <br>
                    First and Second Floor
                  </p>
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
                  <p>
                    <strong>Total Floor Area: 159 m<sup>2</sup></strong> <br>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br>

    <section class="section-2 section-flex">
      <div class="section-one-bedroom section-flex one-bedroom">
        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap" id="c5">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C5.jpg" class="" alt="">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type C-5</h2>
                  <h4>3 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 4 <br>
                    First and Second Floor
                  </p>
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
                  <p>
                    <strong>Total Floor Area: 143 m<sup>2</sup></strong> <br>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap extra-height" id="c6">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/threebedrooms/C6.jpg" class="" alt="">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type C-6</h2>
                  <h4>3 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Second Floor
                  </p>
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
                  <p>
                    <strong>Total Floor Area: 108 m<sup>2</sup></strong> <br>
                    <strong>Terrace Area: 32 m<sup>2</sup></strong>
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
