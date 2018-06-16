<?php
/**
 * Template Name: Contact
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

		<div id="cmsmasters_row_99a2fff466" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
			<div class="cmsmasters_row_outer_parent">
				<div class="cmsmasters_row_outer">
					<div class="cmsmasters_row_inner">
						<div class="cmsmasters_row_margin cmsmasters_11">
							<div id="cmsmasters_column_9d867921bb" class="cmsmasters_column one_first">
								<div class="cmsmasters_column_inner">
									<div id="cmsmasters_heading_ad1380d5ae" class="cmsmasters_heading_wrap cmsmasters_heading_align_center heading_align_center">
										<h2 class="cmsmasters_heading">Get In Touch</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cmsmasters_row_inner">
			<div class="cmsmasters_row_margin" style="padding-left:20px;">
				<div class="">
					<div class="cmsmasters_column_inner">
						<div class="">
							<h3 class="cmsmasters_heading">Request a tour</h3>
						</div>
						<div class="tour">
							<p>Allow us to introduce Eden Residence to you personally by taking you on a tour of finished units and the project site.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
			<div class="cmsmasters_row_outer_parent">
				<div class="cmsmasters_row_outer">
					<div class="cmsmasters_row_inner">
						<div class="cmsmasters_row_margin cmsmasters_1323">
							<div class="cmsmasters_column two_third">
								<div class="cmsmasters_column_inner">
									<div class="cmsmasters_google_map google_map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.122948169501!2d39.169564926056!3d21.542047344254623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1531310ec83%3A0xde24df40b933ccfa!2sEden+Residence!5e0!3m2!1sen!2sph!4v1528870584921"
										frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
									</div>
									<div class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
										<h3 class="cmsmasters_heading">Our contacts</h3>
									</div>
									<ul id="cmsmasters_icon_list_items_b3ac04eb81" class="cmsmasters_icon_list_items cmsmasters_icon_list_type_list">
										<li id="cmsmasters_icon_list_item_aa6d5b3f8a" class="cmsmasters-icon-location-3">
											<i class="fas fa-map-marker"></i> Jeddah's Upscale Al Andalus Detrict
										</li>
										<li id="cmsmasters_icon_list_item_025628a450" class="cmsmasters-icon-mail-3">
											<i class="fas fa-envelope"></i> info@eden-residence.com
										</li>
										<li id="cmsmasters_icon_list_item_569b3c4dbb" class="cmsmasters-icon-phone-4">
											<i class="fas fa-mobile"></i> Call Us:  +966508543714
										</li>
									</ul>
									<br><br>
									<div class="cmsmasters_heading_wrap cmsmasters_heading_align_left" style="margin-top:20px;">
										<h3 class="cmsmasters_heading">Online Brochure</h3><br>
										<p>Download our brochure to get all the details on Eden Residence and the units, amenities and privileges it offers.</p>
										<a target="_blank" href="<?php echo bloginfo('template_url'); ?>/docs/eden brochure final.pdf">Click here</a>
									</div>
								</div>
							</div>
							<div id="cmsmasters_column_867a4c4a99" class="cmsmasters_column two_third">
								<p>Whether you’re a homeowner looking for exclusive urban living in a premium address, a business wanting to reserve a ground floor retail space to serve this vertical compound community, or simply have questions or queries, contact us using the form below. A customer service representative will get back to you as a matter of priority. </p>
								<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cmsmasters_row_inner">
			<div class="cmsmasters_row_margin">
				<div class="">
					<div class="cmsmasters_column_inner">
						<div class="">
							<h3 class="cmsmasters_heading">Take a virtual tour</h3>
						</div>
						<div class="tour">
							<p>Explore the innovation, quality and detail inherent to Eden Residence with a virtual tour that shows you why it sets new standards for liveable urban luxury in Saudi Arabia.</p>
							<iframe width='853' height='480' src='https://my.matterport.com/show/?m=WdT5ePYGUuG&brand=0' frameborder='0' allowfullscreen allow='vr'></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div> <!-- /main-->

<?php get_footer();
