<?php
/**
 * Template Name: Front Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */

get_header();
/*
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php */
// get_sidebar();
?>
<div id="page-inner">

	<div id="branding">
		<img id="" src="<?php echo get_template_directory_uri(); ?>/inc/static/39e19f9bd2a1c80d82399ce23cee912f.jpg" alt="Brenda Hansen-Mayer Professional Therapy Sioux Falls, SD">
	</div>

	<div id="brenda-cont">
		<img id="brenda" src="<?php echo get_template_directory_uri(); ?>/inc/static/1857e753c6928443b70457b1b52c2b0f.jpg" alt="Brenda Hansen-Mayer Professional Therapy Sioux Falls, SD">
	</div>
	



</div>

<style type="text/css">
.header-image {
    height: 0px;
}
#page {
	max-width: 100%;
	width: 1680px;
	margin: 0 auto;
    background: url(<?php echo get_template_directory_uri(); ?>/inc/static/9688ee6e03d2eac6edc2e35bf445239a.jpg) top center no-repeat;
    background-size: contain;
}
#page-inner {
	width: 100%;
	margin: 0 auto;
	height: 1174px;
}
#brenda {
	width: 263px;
	height: 263px;
	position: relative;
	overflow: hidden;
}
#brenda-cont {
    top: 340px;
    left: auto;
    position: relative;
    margin: 0 auto;
    width: 263px;
    display: block;
}
#branding {
	width: 504px;
	margin: 0 auto;
	position: relative;
	top: 255px;
}
@media all and (max-width: 768px) {
  img, div {
    max-width: 100% !important;
    height: auto;
  }
}
</style>		
<?php  get_footer();












