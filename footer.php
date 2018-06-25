<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eden
 */

?>

</div><!-- #page -->

<div id="bottom" class="cmsmasters_color_scheme_first">
	<div class="bottom_bg">
		<div class="bottom_outer">
			<div class="bottom_inner sidebar_layout_14141414">
				<aside id="custom-contact-info-3" class="widget widget_custom_contact_info_entries">
					<h3 class="widgettitle">Info</h3>
					<div class="icons">
						<p><i class="fas fa-map-marker"></i> Jeddah's Upscale Al Andalus Destrict</p>
					</div>
					<div class="icons">
						<p><i class="fas fa-envelope"></i> info@eden-residence.com</p>
					</div>
					<div class="icons">
						<p><i class="fas fa-mobile"></i> Call Us:  +966508543714</p>
					</div>
				</aside>

				<aside id="text-3" class="widget widget_text">
					<h3 class="widgettitle">About</h3>
					<div class="textwidget">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						) );
						?>
					</div>
				</aside>

				<aside id="text-2" class="widget widget_text">
					<h3 class="widgettitle">Quick Links</h3>
					<div class="textwidget">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'footer-social',
						) );
						?>
					</div>
				</aside>

				<aside id="wysija-2" class="widget widget_wysija">
					<h3 class="widgettitle">NEWSLETTER</h3>
					<?php echo do_shortcode( '[newsletter_form]' ); ?>
				</aside>
			</div>
		</div>
	</div>
</div>

<a href="javascript:void(0)" id="slide_top" class="">
	<i class="fas fa-angle-up" style="margin-top: 14px;"></i>
</a>

<footer id="wp-footer" class="cmsmasters_color_scheme_footer cmsmasters_footer_default">
	<div class="footer_inner">
		<div class="footer_in_inner">
			<div class="social_wrap">
				<div class="social_wrap_inner">
					<ul>
						<li>
							<a href="#" class="cmsmasters_social_icon" title="Facebook" target="_blank">
								<i class="fab fa-facebook-square"></i>
							</a>
						</li>
						<li>
							<a href="#" class="cmsmasters_social_icon" title="Twitter" target="_blank">
								<i class="fab fa-twitter-square"></i>
							</a>
						</li>
						<li>
							<a href="#" class="cmsmasters_social_icon" title="Google" target="_blank">
								<i class="fab fa-google-plus-square"></i>
							</a>
						</li>
						<li>
							<a href="#" class="cmsmasters_social_icon" title="Instagram" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="#" class="cmsmasters_social_icon" title="Pinterest" target="_blank">
								<i class="fab fa-pinterest-square"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer_logo_wrap">
				<a href="#" title="Eden Residence" class="footer_logo">
					<img class="footer_logo_retina" src="<?php echo bloginfo('template_url'); ?>/img/eden_logo.png" alt="Eden Residence" width="200" height="70" >
				</a>
			</div>
			<span class="footer_copyright copyright">© 2018 EDEN RESIDENCE</span>
		</div>
	</div>
</footer>

<div id="theprojectModal">
	<div class="close-theprojectModal">
		<i class="fas fa-times"></i>
	</div>

	<div class="modal-content">
		<div class="cmsmasters_row_inner header_content">
			<div class="cmsmasters_row_margin cmsmasters_11">
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<h2 class="">The Project</h2>
					</div>
				</div>
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<div class="featured_block_text">
							<p> Welcome to urban living reimagined – in an exclusive downtown Jeddah address. </p>
							<p> Eden Residence is an innovative vertically integrated lifestyle concept that combines the exclusivity of compound living with the vibrancy of central city life. </p>
							<p>
								Nestled within the upscale Al Andalus district in Jeddah’s Tahlia area, Eden Residence offers meticulously designed one, two and three bedroom residences with world-class shared amenities.
								The project combines contemporary urban architecture with traditional cues to set a new benchmark for design, quality and liveability in Saudi Arabia.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="arhitectureModal">
	<div class="close-arhitectureModal">
		<i class="fas fa-times"></i>
	</div>

	<div class="modal-content">
		<div class="cmsmasters_row_inner header_content">
			<div class="cmsmasters_row_margin cmsmasters_11">
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<h2 class="">Architecture</h2>
					</div>
				</div>
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<div class="featured_block_text">
							<p> Welcome to urban living reimagined – in an exclusive downtown Jeddah address. </p>
							<p> Eden Residence is an innovative vertically integrated lifestyle concept that combines the exclusivity of compound living with the vibrancy of central city life. </p>
							<p>
								Nestled within the upscale Al Andalus district in Jeddah’s Tahlia area, Eden Residence offers meticulously designed one, two and three bedroom residences with world-class shared amenities.
								The project combines contemporary urban architecture with traditional cues to set a new benchmark for design, quality and liveability in Saudi Arabia.
							</p>
							<div class="">
								<h4 class="">
									<a href="/about-us">Reimagining Exclusivity</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="projectVisitionModal">
	<div class="close-projectVisitionModal">
		<i class="fas fa-times"></i>
	</div>

	<div class="modal-content">
		<div class="cmsmasters_row_inner header_content">
			<div class="cmsmasters_row_margin cmsmasters_11">
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<h2 class="">Project Vission</h2>
					</div>
				</div>
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<div class="featured_block_text">
							<p> Welcome to urban living reimagined – in an exclusive downtown Jeddah address. </p>
							<p> Eden Residence is an innovative vertically integrated lifestyle concept that combines the exclusivity of compound living with the vibrancy of central city life. </p>
							<p>
								Nestled within the upscale Al Andalus district in Jeddah’s Tahlia area, Eden Residence offers meticulously designed one, two and three bedroom residences with world-class shared amenities.
								The project combines contemporary urban architecture with traditional cues to set a new benchmark for design, quality and liveability in Saudi Arabia.
							</p>
							<div class="">
								<h4 class="">
									<a href="/about-us">Reimagining Exclusivity</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="requestResidenceModal">
	<div class="close-requestResidenceModal">
		<i class="fas fa-times"></i>
	</div>

	<div class="modal-content">
		<div class="cmsmasters_row_inner header_content">
			<div class="cmsmasters_row_margin cmsmasters_11">
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<h2 class="">Request Residence</h2>
					</div>
				</div>
				<div class="cmsmasters_featured_block">
					<?php echo do_shortcode('[wpforms id="64" title="false" description="false"]'); ?>
					<?php echo do_shortcode('[wpforms id="83" title="false" description="false"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="locationMapModal">
	<div class="close-locationMapModal">
		<i class="fas fa-times"></i>
	</div>

	<div class="modal-content">
		<div class="cmsmasters_row_inner header_content">
			<div class="cmsmasters_row_margin cmsmasters_11">
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<h2 class="">Premium Location</h2>
					</div>
				</div>
				<div class="cmsmasters_featured_block">
					<div class="pargraph-1">
						<p>Eden Residence is unique in bringing sophisticated compound living to the very heart of the city. Here, residents benefit from a premium address in Jeddah’s most desirable area – with a world of food and shopping practically on the doorstep.</p>
					</div>
					<img src="<?php echo bloginfo('template_url'); ?>/img/location.svg" alt="Location">
				</div>
			</div>
		</div>
	</div>
</div>

<span class="cmsmasters_responsive_width"></span>

<?php wp_footer(); ?>

<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/142995/script.js');
</script>

</body>
</html>
