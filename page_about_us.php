<?php
/**
 * Template Name: About-Us
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
      <div class="headline_outer" id="about-us-banner">
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

    <section class="section-1 section-flex section-location section-flex--column">
      <div class="section-1-one">
        <img src="<?php echo bloginfo('template_url'); ?>/img/charchar/untensils.png" alt="untensils image">
      </div>
      <div class="section-1-two-about">
        <h1>master crafted by industry experts</h1>
      </div>
    </section>

    <section class="section-2 section-flex">
      <div class="section-2-one-about">
        <article <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title">Developed by Nawa</h1>
          </header>

          <div class="entry-content section-flex">
            <div class="">
              <img id="nawa-logo" src="<?php echo bloginfo('template_url'); ?>/img/nawa_logo.jpg" alt="Nawa logo">
            </div>
            <p>Eden Residence is being master planned and developed by Nawa Developments, a firm known for its commitment to quality and determination to setting new standards in residential living within Saudi Arabia. Established in 2014, Nawa Developments has already proved its ability to deliver premium quality on time and to budget with a portfolio of projects that includes the Jasmine Residence and Diamond Residence. </p>
          </div>
        </article>
      </div>
    </section>

    <br><br>

    <section class="section-2 section-flex">
      <div class="section-2-one-about">
        <article <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title">Advised by Sidra Capital</h1>
          </header>

          <div class="entry-content section-flex">
            <div class="sidra">
              <img id="sidra-logo" src="<?php echo bloginfo('template_url'); ?>/img/sidra_logo.png?v=1" alt="Sidra logo">
            </div>
            <p>Eden Residence is being advised by Sidra Capital, an arm of Al Murjan Holding, and one of Saudi Arabia’s foremost Shariah-compliant financial institutions. With a portfolio spanning multiple geographies and asset classes, Sidra Capital is recognised for its excellent track record. The firm is known for the trust it has built with investors and other audiences, the professionalism and transparency with which it operates, and the market intelligence and insights it brings to the table.</p>
          </div>
        </article>
      </div>
    </section>

    <br>

  </div>

 </div> <!-- /main-->

 <?php get_footer();
