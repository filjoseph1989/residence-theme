<?php
/**
 * Template Name: Apartment-two-bedrooom
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
        <h1>two bedroom units</h1>
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
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B1.jpg" class="" alt="B1">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 1</h2>
                  <h4>2 Bedroom Apartment with Garden</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Ground Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 2 Master Bedrooms </li>
                    <li> 2 Bathroom en suite </li>
                    <li> 1 Guest Toilet </li>
                    <li> Maid room </li>
                    <li> Laundry Room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 106 m<sup>2</sup></strong> <br>
                    <strong>Garden Area: 51 m</strong>
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
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B2.jpg" class="" alt="B2">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 2</h2>
                  <h4>2 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    First and Second Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 2 Master Bedrooms </li>
                    <li> 2 Bathroom en suite </li>
                    <li> 1 Guest Toilet </li>
                    <li> Maid room </li>
                    <li> Laundry Room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 107 m<sup>2</sup></strong> <br>
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
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B3.jpg" class="" alt="B3">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 3</h2>
                  <h4>2 Bedroom Apartment with Garden</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Ground Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 2 Master Bedrooms </li>
                    <li> 2 Bathroom en suite </li>
                    <li> 1 Guest Toilet </li>
                    <li> Maid room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 106 m<sup>2</sup></strong> <br>
                    <strong>Garden Area: 28 m<sup>2</sup></strong>
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
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B4.jpg" class="" alt="B4">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 4</h2>
                  <h4>2 Bedroom Apartment with Garden</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Ground Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 2 Master Bedrooms </li>
                    <li> 2 Bathroom en suite </li>
                    <li> 1 Guest Toilet </li>
                    <li> Maid room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 107 m<sup>2</sup></strong> <br>
                    <strong>Garden Area : 39 m<sup>2</sup></strong>
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
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B5.jpg" class="" alt="B5">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 5</h2>
                  <h4>2 Bedroom Apartment with Garden</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Ground Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 2 Master Bedrooms </li>
                    <li> 2 Bathroom en suite </li>
                    <li> 1 Guest Toilet </li>
                    <li> Maid room </li>
                    <li> Laundry Room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 110 m<sup>2</sup></strong> <br>
                    <strong>Garden Area: 29 mm<sup>2</sup></strong>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class="">
          <div class="column-1">
            <a href="#">
              <div class="project_img_wrap extra-height" id="b6">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B6.jpg" class="" alt="B6">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 6</h2>
                  <h4>2 Bedroom Apartment with Garden</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Ground Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 2 Master Bedrooms </li>
                    <li> 2 Bathroom en suite </li>
                    <li> 1 Guest Toilet </li>
                    <li> Maid room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 103 m<sup>2</sup></strong> <br>
                    <strong>Garden Area: 30 m<sup>2</sup></strong>
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
              <div class="project_img_wrap extra-height-2">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B7.jpg" class="" alt="B7">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 7</h2>
                  <h4>2 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    Second Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 1 Master Bedrooms </li>
                    <li>  Second Bedroom </li>
                    <li> 1 Bathroom en suite </li>
                    <li> 1 Shared Bathroom </li>
                    <li> Laundry Room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 105 m<sup>2</sup></strong> <br>
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
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B8.jpg" class="" alt="B8">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 8</h2>
                  <h4>2 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 4 <br>
                    First and Second Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area</li>
                    <li> 2 Master Bedrooms</li>
                    <li> 2 Bathroom en suite</li>
                    <li> 1 Guest Toilet</li>
                    <li> Maid room</li>
                    <li> Parking</li>
                    <li> Driver’s room (optional)</li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 107 m<sup>2</sup></strong> <br>
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
              <div class="project_img_wrap extra-height-3" id="b9">
                <figure class="">
                  <img src="<?php echo bloginfo('template_url'); ?>/img/apartments/twobedrooms/B9.jpg" class="" alt="B9">
                </figure>
              </div>
            </a>
            <div class="">
              <article <?php post_class(); ?>>
                <header class="entry-header">
                  <h2 class="entry-title">Apartment Type B- 9</h2>
                  <h4>2 Bedroom Apartment</h4>
                </header>
                <div class="entry-content">
                  <p class="entry-title">
                    Units Available: 2 <br>
                    First and Second Floor
                  </p>
                  <ol>
                    <li> Living + Open Kitchen Area </li>
                    <li> 2 Master Bedrooms </li>
                    <li> 2 Bathroom en suite </li>
                    <li> 1 Guest Toilet </li>
                    <li> Maid room </li>
                    <li> Laundry Room </li>
                    <li> Parking </li>
                    <li> Driver’s room (optional) </li>
                    <li> Additional Storage (optional)</li>
                  </ol>
                  <p>
                    <strong>Total Floor Area: 132 m<sup>2</sup></strong> <br>
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class=""> </div>
      </div>
    </section>

    <br>
 	</div>

 </div> <!-- /main-->

 <?php get_footer();
