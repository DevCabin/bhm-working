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

<div class="wsb-canvas body">
	<div class="wsb-canvas-page-container" >

		<div class="wsb-canvas-page page" >
			<div id="wsb-canvas-template-container" >
				<div class="----navigation" data-type="element" >
					<div class="wsb-nav nav_theme nav-text-center nav-horizontal nav-btn-center nav-equal-width wsb-navigation-rendered-top-level-container" >

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'xstart' ); ?></button>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</div>
				</div>


				<div class="----shape" data-type="element" id="----db8d66b4-53a3-410f-8610-0e8d47a319a0">
					<div class="wsb-shape shape_rectangle"></div>
				</div>
				<div class="----image" data-type="element" id="----c9ee7f07-0f02-47c7-8b8b-5db06e3ddffa">
					<div class="wsb-image-inner">
						<div class="customStyle"><img alt="brenda hansen-mayer cover photo" src="<?php echo get_template_directory_uri(); ?>/inc/static/9688ee6e03d2eac6edc2e35bf445239a.jpg" style="vertical-align:middle;width:1680px;height:764px;"></div>
					</div>
				</div>
				<div class="----shape" data-type="element" id="----b7cb836e-6de6-42db-bce1-27193d76a534">
					<div class="wsb-shape shape_shade_homepage_2 customStyle"></div>
				</div>
				<div class="----image" data-type="element" id="----46dcbee6-d02e-4218-ab9f-ad3375820c5c">
					<div class="wsb-image-inner">
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/inc/static/39e19f9bd2a1c80d82399ce23cee912f.jpg" style="vertical-align:middle;width:506px;height:126px;"></div>
					</div>
				</div>
				<div class="----shape" data-type="element" id="----308e16f4-75c7-4c8e-981a-b0c776293f2a">
					<div class="wsb-shape shape_rectangle customStyle"></div>
				</div>
				<div class="----image" data-type="element" id="----008d44a0-d0e6-40b9-8fb2-c24cff59f2a3">
					<div class="wsb-image-inner">
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/inc/static/1857e753c6928443b70457b1b52c2b0f.jpg" style="vertical-align:middle;width:263px;height:263px;"></div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer();
