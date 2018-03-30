<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

 			<section class="error-404 not-found">
 				<header class="page-header">
 					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'xstart' ); ?></h1>
 				</header><!-- .page-header -->

 				<div class="page-content">
 					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'xstart' ); ?></p>

 					<?php
 						get_search_form();

 						the_widget( 'WP_Widget_Recent_Posts' );
 					?>

 					<div class="widget widget_categories">
 						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'xstart' ); ?></h2>
 						<ul>
 						<?php
 							wp_list_categories( array(
 								'orderby'    => 'count',
 								'order'      => 'DESC',
 								'show_count' => 1,
 								'title_li'   => '',
 								'number'     => 10,
 							) );
 						?>
 						</ul>
 					</div><!-- .widget -->

 					<?php


 						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'xstart' ), convert_smilies( ':)' ) ) . '</p>';
 						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

 						the_widget( 'WP_Widget_Tag_Cloud' );
 					?>

 				</div><!-- .page-content -->
 			</section><!-- .error-404 -->

 		</main><!-- #main -->
 	</div><!-- #primary -->

 */ ?>


<style>
<?php if (has_post_thumbnail( $post->ID ) ) { ?>
  <?php $bgimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  
.header-image {
	background: url(<?php echo $bgimage[0]; ?>) center center no-repeat;
}
	<?php } else { ?>

.header-image {
	background: url(http://bhm.new.lamodeadvertising.com/wp-content/themes/bhm/inc/static/74dceb70bf5529daa7c0888ec0f0b02c.jpg?v=no) center center no-repeat;
}
<?php }; ?>
</style>
		<div id="content" class="site-content wrapper">
				<div class="content">
 	 				<div class="content-inner">
 	 					<div class="txt">



							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>



 	 					</div>
 	 				</div>
 	 			</div>
 	 				
 		</div>


 <?php
 get_footer();
