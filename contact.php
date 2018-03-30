<?php
/**
 * Template Name: Contact
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


<img class="contact-image" src="http://bhm.new.lamodeadvertising.com/wp-content/uploads/2018/03/158afede4742b2c8f1655e9262d22f87.jpg" alt="" width="544" height="288" srcset="http://bhm.new.lamodeadvertising.com/wp-content/uploads/2018/03/158afede4742b2c8f1655e9262d22f87.jpg 544w, http://bhm.new.lamodeadvertising.com/wp-content/uploads/2018/03/158afede4742b2c8f1655e9262d22f87-300x159.jpg 300w" sizes="(max-width: 544px) 100vw, 544px" />

<div class="contact-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d46328.145018628406!2d-96.79904750995993!3d43.4708456007077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x878eb6f82f0cf5ad%3A0x7fb139d240036ab8!2s1601+E+69th+St%2C+Sioux+Falls%2C+SD+57108!3m2!1d43.488741399999995!2d-96.70446009999999!5e0!3m2!1sen!2sus!4v1522380170716" width="544" height="288" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
	
<style type="text/css">
.contact-image {
	width: 544px;
	margin-left: -200px;
	display: inline-block;
}
.contact-map {

    width: 544px;
    overflow: hidden;
    margin-left: 400px;
    display: inline-block;
    margin-top: -288px;
    height: 288px;
    position: relative;
    top: -25px;

}
@media all and (max-width: 768px) {
	.contact-image{
		display: none;
	}
	.contact-map {
	    width: auto;
	    overflow: hidden;
	    margin-left: 0;
	    display: inline-block;
	    margin-top: -0;
	    height: auto;
	    position: relative;
	    top: 0;

	}
}

</style>


 	 					</div>
 	 				</div>
 	 			</div>
 	 				
 		</div>


 <?php
 get_footer();
