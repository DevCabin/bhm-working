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




 	 <style type="text/css">
 	 #wsb-element-9a4532dd-ebb4-4c49-ac61-4d8e55999952{top:31px;left:616px;position:absolute;z-index:40}#wsb-element-9a4532dd-ebb4-4c49-ac61-4d8e55999952 .txt{width:409px;height:75px}#wsb-element-5261b92e-a8f5-48eb-ab4f-b8d5655a16c6{top:310px;left:-554px;position:absolute;z-index:112}#wsb-element-5261b92e-a8f5-48eb-ab4f-b8d5655a16c6 .wsb-shape{width:2049px;height:407px;padding:0px;background:#fff;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-56aac4a6-e1f8-464d-99c2-55c4b42d6149{top:0px;left:-460px;position:absolute;z-index:1}#wsb-element-56aac4a6-e1f8-464d-99c2-55c4b42d6149 .wsb-image-inner{}#wsb-element-56aac4a6-e1f8-464d-99c2-55c4b42d6149 .wsb-image-inner div{width:1920px;height:308px;position:relative;overflow:hidden}#wsb-element-56aac4a6-e1f8-464d-99c2-55c4b42d6149 img{position:absolute}#wsb-element-35a161f3-3fd6-41bd-9c0a-a0f0bf38b9d6{top:89px;left:43px;position:absolute;z-index:87}#wsb-element-35a161f3-3fd6-41bd-9c0a-a0f0bf38b9d6 .txt{width:300px;height:68px}#wsb-element-ada7df3f-78da-4547-b3c0-0e4bda10989d{top:31px;left:41px;position:absolute;z-index:38}#wsb-element-ada7df3f-78da-4547-b3c0-0e4bda10989d .txt{width:470px;height:60px}#wsb-element-dbaa8034-c91d-405e-b611-e4e6724c46b7{top:377px;left:127px;position:absolute;z-index:119}#wsb-element-dbaa8034-c91d-405e-b611-e4e6724c46b7 .txt{width:777px;height:135px}#wsb-element-204f3633-9312-405b-9a6a-42d1a3b773bc{top:49px;left:-73px;position:absolute;z-index:69}#wsb-element-204f3633-9312-405b-9a6a-42d1a3b773bc{width:1146px;height:40px}
 	 </style>
 	 <div class="wsb-canvas body">
 	 	<div class="wsb-canvas-page-container" style="min-height: 100%; padding-top: 0px; position: relative;">
 	 		<div class="wsb-canvas-scrollable" style="background-color: #27455b; background-position-x: center; background-position-y: center; background-position: center center; background-repeat: repeat; position: absolute; width: 100%; height: 100%;"></div>
 	 		<div class="wsb-canvas-page page" id="wsb-canvas-template-page" style="height: 717px; margin: auto; width: 1000px; background-color: #27455b; position: relative;">
 	 			<div id="wsb-canvas-template-container" style="position: absolute;">
 	 				<div class="wsb-element-shape" data-type="element" id="wsb-element-5261b92e-a8f5-48eb-ab4f-b8d5655a16c6">
 	 					<div class="wsb-shape customStyle"></div>
 	 				</div>
 	 				<div class="wsb-element-image" data-type="element" id="wsb-element-56aac4a6-e1f8-464d-99c2-55c4b42d6149">
 	 					<div class="wsb-image-inner">
 	 						<div class="img_hp"><img src="<?php echo get_template_directory_uri(); ?>/inc/static/74dceb70bf5529daa7c0888ec0f0b02c.jpg" style="vertical-align:middle;width:1920px;height:308px;"></div>
 	 					</div>
 	 				</div>
 	 				<div class="wsb-element-text" data-type="element" id="wsb-element-dbaa8034-c91d-405e-b611-e4e6724c46b7">
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
 	 				<div class="wsb-element-navigation" data-type="element" id="wsb-element-204f3633-9312-405b-9a6a-42d1a3b773bc">
 	 					<div class="wsb-nav nav_theme nav-text-center nav-horizontal nav-btn-center nav-equal-width wsb-navigation-rendered-top-level-container" id="wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc" style="width: 1146px; height: 40px;">
 	 						<style>
 	 						#wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container ul > li > a {font-family:Arial, Helvetica, sans-serif;color:#ffffff;} #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container ul > li:hover, #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container ul > li:hover > a, #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container ul > li.active:hover, #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container ul > li.active > a:hover, #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container ul > li.active .nav-subnav li:hover, #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container ul > li.active .nav-subnav li:hover > a {background-color: !important;color:#849fb8 !important;} #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container > ul.wsb-navigation-rendered-top-level-menu > li.active, #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container > ul.wsb-navigation-rendered-top-level-menu > li.active > a {color:#ffffff;}
 							#wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container > ul.wsb-navigation-rendered-top-level-menu > li.active, #wsb-nav-204f3633-9312-405b-9a6a-42d1a3b773bc.wsb-navigation-rendered-top-level-container > ul.wsb-navigation-rendered-top-level-menu > li.active > a {color:#ffffff;}
 							</style>
 							<!--ul class="wsb-navigation-rendered-top-level-menu">
 								<li style="width: 20%">
 									<a data-pageid="00000000-0000-0000-0000-000461155013" data-title="HOME" data-url="home.html" href="http://www.bhmtherapy.com/home.html" target="">HOME</a>
 								</li>
 								<li style="width: 20%">
 									<a data-pageid="00000000-0000-0000-0000-000462146352" data-title="ABOUT BHM" data-url="about-bhm.html" href="http://www.bhmtherapy.com/about-bhm.html" target="">ABOUT BHM</a>
 								</li>
 								<li style="width: 20%">
 									<a data-pageid="56806176-3fc2-469b-87c0-9e1e64dcd582" data-title="SERVICES" data-url="emdr.html" href="http://www.bhmtherapy.com/emdr.html" target="">SERVICES</a>
 								</li>
 								<li style="width: 20%">
 									<a data-pageid="83338e2a-3fd1-4bfc-aefd-61e550718726" data-title="POTENTIAL CLIENTS" data-url="potential-clients.html" href="http://www.bhmtherapy.com/potential-clients.html" target="">POTENTIAL CLIENTS</a>
 								</li>
 								<li style="width: 20%">
 									<a data-pageid="00000000-0000-0000-0000-000461933400" data-title="CONTACT" data-url="contact.html" href="http://www.bhmtherapy.com/contact.html" target="">CONTACT</a>
 								</li>
 							</ul-->
 							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'xstart' ); ?></button>
 							<?php
 								wp_nav_menu( array(
 									'theme_location' => 'menu-1',
 									'menu_id'        => 'primary-menu',
 								) );
 							?>
 							</div>
 	 				</div>
 	 			</div>
 	 		</div>



 <?php
 get_footer();
