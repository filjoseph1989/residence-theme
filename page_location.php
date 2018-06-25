<?php
/**
 * Template Name: Location
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
      <div class="headline_outer headline_location">
        <div style=" height: 380px; ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.122948169501!2d39.169564926056!3d21.542047344254623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1531310ec83%3A0xde24df40b933ccfa!2sEden+Residence!5e0!3m2!1sen!2sph!4v1528870584921"
          frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <section class="section-1 section-flex section-location section-flex--column">
      <div class="section-1-one">
        <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/building.png" alt="Penthouse">
      </div>
      <div class="section-1-two">
        <h1>welcome to a premium location</h1>
      </div>
    </section>

    <section class="section-2 section-flex">
      <div class="section-2-location">
        <div class="section-2-one">
          <article <?php post_class(); ?>>
            <div class="entry-content">
              <p>Eden Residence is unique in bringing sophisticated compound living to the very heart of the city. Here, residents benefit from a premium address in Jeddah’s most desirable area – with a world of food and shopping practically on the doorstep.</p>
              <p>Situated in Jeddah’s upscale Al Andalus district, the project is a minute away from Tahlia Street’s vibrant retail and F&amp;B scene, including Le Mall and its portfolio of international restaurants and cafes. Eden Residence is also in proximity to the Rocco Forte-Assila hotel, the iconic Galleria Mall, and the Jeddah Corniche with its selection of luxury hotels.</p>
              <p>Meanwhile, Jeddah’s arterial highway – Madina Road – can also be accessed in under a minute. Healthcare is also close by, courtesy the King Fahd Hospital and Dr Soliman Fakeeh Hospital. </p>
              <p>Eden Residence sets new standards for life-enhancing services that combine convenience, security and comfort. </p>
            </div>

            <footer class="entry-footer">&nbsp;</footer>
          </article>
        </div>
        <div class="section-2-two">
          <a href="#locationMapModal" id="locationModal">
            <div class="project_img_wrap" id="location-map">
              <figure class="cmsmasters_img_rollover_wrap location_img_wrap">
                <img src="<?php echo bloginfo('template_url'); ?>/img/location.svg" alt="Location">
              </figure>
            </div>
            <div class="section-2-pargraph">
              <article <?php post_class(); ?>>
                <div class="entry-content">
                  <p>The ground floor hosts two guest lobbies - one for each entrance to the building. Meanwhile, residents benefit from exclusive private access from lift lobbies situated in the basement parking lot.</p>
                  <p>Other amenities and services include fire alarms and CCTV security, and round the clock cleaning and maintenance capabilities delivered by resident staff. The basement level also makes room for accommodation for drivers and house help.</p>
                </div>
              </article>
            </div>
          </a>
        </div>
      </div>
    </section>
  </div>

 </div> <!-- /main-->

 <?php get_footer();
