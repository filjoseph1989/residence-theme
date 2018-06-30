<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

		<br><br>

		<?php	while ( have_posts() ) : the_post(); ?>

			<section class="section-2 section-flex">
				<div class="">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<?php if ('post' === get_post_type()): ?>
							<div class="entry-meta">
								<?php
								eden_posted_on();
								eden_posted_by();
								?>
							</div>
						<?php endif; ?>

						<div class="section-flex">
							<?php eden_post_thumbnail(); ?>
							<div class="entry-content">
								<?php
								the_content( sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eden' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
									) );

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eden' ),
										'after'  => '</div>',
									) );
									?>
								</div><!-- .entry-content -->
						</div>

						<br>

						<footer class="entry-footer">
							<?php eden_entry_footer(); ?>
						</footer>

					</article>
				</div>
			</section>

		<?php endwhile; ?>
	</div>

	<br>

<?php
get_footer();
