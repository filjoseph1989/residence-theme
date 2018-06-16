<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eden
 */

get_header();
?>

	<div id="middle">
		<article class=""></article>

		<div class="middle_inner" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/eden_logo.png);"></div>

		<div class="cmsmasters_row_inner header_content">
			<div class="cmsmasters_row_margin">
				<div class="cmsmasters_featured_block">
					<div class="featured_block_inner">
						<h2 class="">Welcome to urban living reimagined</h2>
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

		<div class="cmsmasters_row_bot_default cmsmasters_row_top_default" style="background-attachment: scroll;">
			<div class="cmsmasters_row_inner">
				<div class="cmsmasters_row_margin">
					<div class="cmsmasters_column one_third home_cards">
						<div class="cmsmasters_column_inner">
							<div class="cmsmasters_featured_block" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/scene-recovered.jpg);">
								<div class="featured_block_inner">
									<div class="featured_block_text">
										The Project <br><br>
										<a href="#theprojectModal" id="theproject">
											<button type="button" class="btn btn-default">Learn More </button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="cmsmasters_column one_third home_cards">
						<div class="cmsmasters_column_inner" style=" height:  100%; ">
							<div class="cmsmasters_featured_block" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/building.png);">
								<div class="featured_block_inner">
									<div class="featured_block_text">
										<span>Architecture</span> <br><br>
										<a href="#arhitectureModal" id="modal-architecture">
											<button type="button" class="btn btn-default">Learn More</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="cmsmasters_column one_third home_cards">
						<div class="cmsmasters_column_inner" style=" height:  100%; ">
							<div class="cmsmasters_featured_block" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/A1.jpg);">
								<div class="featured_block_inner">
									<div class="featured_block_text">
										Project Vision <br><br>
										<a href="#projectVisitionModal" id="projectVisition">
											<button type="button" class="btn btn-default">Learn More</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="lifestyle-container">
			<div class="cmsmasters_row_inner cmsmasters_heading_wrap cmsmasters_heading_align_center">
				<h2 class="cmsmasters_heading">LIFESTYLE</h2>
			</div>
		</div>

		<div class="cmsmasters_row_inner lifetyle-slider">
			<div class="cmsmasters_row_margin">
				<div id="cmsmasters_column_c1aac063b1" class="cmsmasters_column one_first">
					<div class="cmsmasters_column_inner">
						<div class="cmsmasters_posts_slider">
							<div id="cmsmasters_slider_7299fbac30" class="cmsmasters_owl_slider owl-carousel" data-items="1" data-pagination="true" data-navigation="false" data-single-item="false" data-auto-play="5000">
								<div class="cmsmasters_owl_slider_item">
									<article id="post-9410" class="cmsmasters_slider_project post-9410 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-bathroom pj-categs-conditioning pj-categs-hair-dryer pj-categs-mini-bar pj-categs-queen pj-categs-room-services">
										<div class="cmsmasters_slider_project_outer">
											<div class="project_img_wrap ">
												<div class="cmsmasters_atach_img" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/bedroom2.jpg)"></div>
											</div>
											<div class="cmsmasters_slider_project_inner">
												<header class="cmsmasters_slider_project_header entry-header">
													<h3 class="cmsmasters_slider_project_title entry-title">
														<a href="#">Bed Room</a>
													</h3>
												</header>
												<h3 class="cmsmasters_project_subtitle">A quality room</h3>
												<div class="cmsmasters_slider_project_content entry-content">
													<p>Eden Residence offers one bedroom units designed intelligently to make the most of liveable space. An open urban concept amplifies airiness and floor area to create perfectly contained units for smaller families. </p>
												</div>
												<div class="cmsmasters_slider_project_info_wrap">
													<span class="cmsmasters_project_price"></span>
													<a class="" href="#"></a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="cmsmasters_owl_slider_item">
									<article id="post-13193" class="cmsmasters_slider_project post-13193 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-bathroom pj-categs-cable-tv pj-categs-conditioning pj-categs-hair-dryer pj-categs-mini-bar pj-categs-room-services">
										<div class="cmsmasters_slider_project_outer">
											<div class="project_img_wrap ">
												<div class="cmsmasters_atach_img" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/corridor.jpg)"></div>
											</div>
											<div class="cmsmasters_slider_project_inner">
												<header class="cmsmasters_slider_project_header entry-header">
													<h3 class="cmsmasters_slider_project_title entry-title">
														<a href="#">Corridor</a>
													</h3>
												</header>
												<h3 class="cmsmasters_project_subtitle">Corridor</h3>
												<div class="cmsmasters_slider_project_content entry-content">
													<p>The corridor of the residence</p>
												</div>
												<div class="cmsmasters_slider_project_info_wrap">
													<span class="cmsmasters_project_price"></span>
													<a class="" href="#"></a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="cmsmasters_owl_slider_item">
									<article id="post-13294" class="cmsmasters_slider_project post-13294 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-bathroom pj-categs-cable-tv pj-categs-conditioning pj-categs-hair-dryer pj-categs-mini-bar pj-categs-room-services">
										<div class="cmsmasters_slider_project_outer">
											<div class="project_img_wrap ">
												<div class="cmsmasters_atach_img" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/interior.jpg)"></div>
											</div>
											<div class="cmsmasters_slider_project_inner">
												<header class="cmsmasters_slider_project_header entry-header">
													<h3 class="cmsmasters_slider_project_title entry-title">
														<a href="#">Interior</a>
													</h3>
												</header>
												<h3 class="cmsmasters_project_subtitle">Interior</h3>
												<div class="cmsmasters_slider_project_content entry-content">
													<p>Situated on the third floor, four exclusive three-bedroom penthouses offer the pinnacle of spacious urban luxury. Designed with expansive outdoor terraces, the Eden Garden penthouses offer instant access to adjacent gym, pool and clubhouse. </p>
												</div>
												<div class="cmsmasters_slider_project_info_wrap">
													<span class="cmsmasters_project_price"></span>
													<a class="" href="#"></a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="cmsmasters_owl_slider_item">
									<article id="post-13224" class="cmsmasters_slider_project post-13224 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-bathroom pj-categs-cable-tv pj-categs-conditioning pj-categs-hair-dryer pj-categs-mini-bar pj-categs-queen">
										<div class="cmsmasters_slider_project_outer">
											<div class="project_img_wrap ">
												<div class="cmsmasters_atach_img" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/interior_penthouse.jpg)"></div>
											</div>
											<div class="cmsmasters_slider_project_inner">
												<header class="cmsmasters_slider_project_header entry-header">
													<h3 class="cmsmasters_slider_project_title entry-title">
														<a href="#">Interior Penthouse</a>
													</h3>
												</header>
												<h3 class="cmsmasters_project_subtitle">Interior Penthouse</h3>
												<div class="cmsmasters_slider_project_content entry-content">
													<p>Situated on the third floor, four exclusive three-bedroom penthouses offer the pinnacle of spacious urban luxury. Designed with expansive outdoor terraces, the Eden Garden penthouses offer instant access to adjacent gym, pool and clubhouse. </p>
												</div>
												<div class="cmsmasters_slider_project_info_wrap">
													<span class="cmsmasters_project_price"></span>
													<a class="" href="#"></a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="cmsmasters_owl_slider_item">
									<article id="post-13253" class="cmsmasters_slider_project post-13253 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-bathroom pj-categs-cable-tv pj-categs-conditioning pj-categs-hair-dryer pj-categs-mini-bar pj-categs-room-services">
										<div class="cmsmasters_slider_project_outer">
											<div class="project_img_wrap ">
												<div class="cmsmasters_atach_img" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/living_room.jpg)"></div>
											</div>
											<div class="cmsmasters_slider_project_inner">
												<header class="cmsmasters_slider_project_header entry-header">
													<h3 class="cmsmasters_slider_project_title entry-title">
														<a href="#">Living Room</a>
													</h3>
												</header>
												<h3 class="cmsmasters_project_subtitle">Living Room</h3>
												<div class="cmsmasters_slider_project_content entry-content">
													<p>Situated on the third floor, four exclusive three-bedroom penthouses offer the pinnacle of spacious urban luxury. Designed with expansive outdoor terraces, the Eden Garden penthouses offer instant access to adjacent gym, pool and clubhouse. </p>
												</div>
												<div class="cmsmasters_slider_project_info_wrap">
													<span class="cmsmasters_project_price"></span>
													<a class="" href="#"></a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="cmsmasters_owl_slider_item">
									<article id="post-13140" class="cmsmasters_slider_project post-13140 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-bathroom pj-categs-cable-tv pj-categs-conditioning pj-categs-hair-dryer pj-categs-mini-bar pj-categs-room-services">
										<div class="cmsmasters_slider_project_outer">
											<div class="project_img_wrap ">
												<div class="cmsmasters_atach_img" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/recreational3.jpg)"></div>
											</div>
											<div class="cmsmasters_slider_project_inner">
												<header class="cmsmasters_slider_project_header entry-header">
													<h3 class="cmsmasters_slider_project_title entry-title">
														<a href="#">Recreational</a>
													</h3>
												</header>
												<h3 class="cmsmasters_project_subtitle">Recreational</h3>
												<div class="cmsmasters_slider_project_content entry-content">
													<p>Situated on the third floor, four exclusive three-bedroom penthouses offer the pinnacle of spacious urban luxury. Designed with expansive outdoor terraces, the Eden Garden penthouses offer instant access to adjacent gym, pool and clubhouse. </p>
												</div>
												<div class="cmsmasters_slider_project_info_wrap">
													<span class="cmsmasters_project_price"></span>
													<a class="" href="#"></a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="cmsmasters_owl_slider_item">
									<article id="post-13167" class="cmsmasters_slider_project post-13167 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-bathroom pj-categs-cable-tv pj-categs-conditioning pj-categs-hair-dryer pj-categs-mini-bar pj-categs-room-services">
										<div class="cmsmasters_slider_project_outer">
											<div class="project_img_wrap ">
												<div class="cmsmasters_atach_img" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/swimming_pool.jpg)"></div>
											</div>
											<div class="cmsmasters_slider_project_inner">
												<header class="cmsmasters_slider_project_header entry-header">
													<h3 class="cmsmasters_slider_project_title entry-title">
														<a href="#">Swimmiing Pool</a>
													</h3>
												</header>
												<h3 class="cmsmasters_project_subtitle">A swimming pool</h3>
												<div class="cmsmasters_slider_project_content entry-content">
													<p>Situated on the third floor, four exclusive three-bedroom penthouses offer the pinnacle of spacious urban luxury. Designed with expansive outdoor terraces, the Eden Garden penthouses offer instant access to adjacent gym, pool and clubhouse. </p>
												</div>
												<div class="cmsmasters_slider_project_info_wrap">
													<span class="cmsmasters_project_price"></span>
													<a class="" href="#"></a>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						<p id="slider-note">You can use your mouse to drag the slide to more on lifestyle</p>
					</div>
				</div>
			</div>
		</div>

		<div class="" style="background-attachment: scroll;">
			<div class="cmsmasters_row_inner appartment">
				<h2 class="">Apartments</h2>
			</div>
		</div>

		<div id="cmsmasters_row_41e40f680c" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
			<div class="cmsmasters_row_outer_parent">
				<div class="cmsmasters_row_outer">
					<div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
						<div class="cmsmasters_row_margin">
							<div class="cmsmasters_column one_fourth rooms">
								<div class="cmsmasters_column_inner">
									<div id="cmsmasters_fb_ef07ee5e3c" class="cmsmasters_featured_block">
										<div class="featured_block_inner">
											<div class="featured_block_text">
												<div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
													<a href="<?php echo get_page_link(55); ?>">
														<h2 class="cmsmasters_heading">One Bed Room</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cmsmasters_column one_fourth rooms">
								<div class="cmsmasters_column_inner">
									<div id="cmsmasters_fb_e81afc63a2" class="cmsmasters_featured_block">
										<div class="featured_block_inner">
											<div class="featured_block_text">
												<div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
													<a href="<?php echo get_page_link(57); ?>">
														<h2 class="cmsmasters_heading">Two Bed Rooms</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cmsmasters_column one_fourth rooms">
								<div class="cmsmasters_column_inner">
									<div id="cmsmasters_fb_659c48ffe6" class="cmsmasters_featured_block">
										<div class="featured_block_inner">
											<div class="featured_block_text">
												<div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
													<a href="<?php echo get_page_link(59); ?>">
														<h2 class="cmsmasters_heading">Three Bed Rooms</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cmsmasters_column one_fourth rooms">
								<div class="cmsmasters_column_inner">
									<div id="cmsmasters_fb_725e32fff3" class="cmsmasters_featured_block">
										<div class="featured_block_inner">
											<div class="featured_block_text">
												<div class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
													<a href="<?php echo get_page_link(61); ?>">
														<h2 class="cmsmasters_heading">Penthouses</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div> <!-- /main-->

<?php get_footer();
