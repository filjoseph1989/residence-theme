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

 		<div class="">
 		  <div class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
 		    <div class="cmsmasters_row_outer_parent penthouse">
 		      <div class="cmsmasters_row_outer">
 		        <div class="cmsmasters_row_inner">
 		          <div class="cmsmasters_row_margin cmsmasters_11">
 		            <div class="cmsmasters_column one_first">
                  <div class="cmsmasters_column_inner">
                    <div class="">
                      <h3 class="cmsmasters_heading">Developed by Nawa</h3>
                    </div>
                    <div class="">
                      <h4 class="cmsmasters_heading"></h4>
                    </div>
                    <div class="">
                      <p>Eden Residence is being master planned and developed by Nawa Developments, a firm known for its commitment to quality and determination to setting new standards in residential living within Saudi Arabia. Established in 2014, Nawa Developments has already proved its ability to deliver premium quality on time and to budget with a portfolio of projects that includes the Jasmine Residence and Diamond Residence. </p>
                    </div>
                  </div>
 		            </div>
 		          </div>
 		        </div>
 		        <div class="cmsmasters_row_inner">
 		          <div class="cmsmasters_row_margin cmsmasters_11">
 		            <div class="cmsmasters_column one_first">
                  <div class="cmsmasters_column_inner">
										<div class="">
											<h3 class="cmsmasters_heading">Advised by Sidra Capital</h3>
										</div>
										<div class="">
											<h4 class="cmsmasters_heading"></h4>
										</div>
										<div class="">
											<p>Eden Residence is being advised by Sidra Capital, an arm of Al Murjan Holding, and one of Saudi Arabia’s foremost Shariah-compliant financial institutions. With a portfolio spanning multiple geographies and asset classes, Sidra Capital is recognised for its excellent track record. The firm is known for the trust it has built with investors and other audiences, the professionalism and transparency with which it operates, and the market intelligence and insights it brings to the table.</p>
										</div>
									</div>
 		            </div>
 		          </div>
 		        </div>
            <br>
            <br>
            <br>
 		      </div>
 		    </div>
 		  </div>
 		</div>

 	</div>

 </div> <!-- /main-->

 <?php get_footer();
