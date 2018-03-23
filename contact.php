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

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
*/
?>

<style type="text/css">
#wsb-element-e01f6c0c-4c9b-484d-8e0a-02ac04b7d245{top:661px;left:686px;position:absolute;z-index:55}#wsb-element-e01f6c0c-4c9b-484d-8e0a-02ac04b7d245 .txt{width:237px;height:96px}#wsb-element-c62746dd-c638-4c20-a404-7fed00a36123{top:314px;left:-420px;position:absolute;z-index:46}#wsb-element-c62746dd-c638-4c20-a404-7fed00a36123 .wsb-shape{width:1920px;height:1025px;padding:0px;background:#fff;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-9c943bbb-720a-4e5f-88bc-f4b42ccdf7ee{top:875px;left:175px;position:absolute;z-index:224}#wsb-element-9c943bbb-720a-4e5f-88bc-f4b42ccdf7ee>div.form-row{width:574px;height:66px}#wsb-element-91a8faeb-f4cc-4715-85ef-f07e70cb8724{top:661px;left:406px;position:absolute;z-index:124}#wsb-element-91a8faeb-f4cc-4715-85ef-f07e70cb8724 .txt{width:190px;height:24px}#wsb-element-8fd4bacb-6384-4391-8b36-370988a53d31{top:466px;left:661px;position:absolute;z-index:41}#wsb-element-8fd4bacb-6384-4391-8b36-370988a53d31 .wsb-shape{width:281px;height:288px;padding:0px;background:transparent;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-873c1a93-e49d-4620-91e6-a532b22cc0c0{top:454px;left:651px;position:absolute;z-index:71}#wsb-element-873c1a93-e49d-4620-91e6-a532b22cc0c0 .wsb-shape{width:100px;height:80px;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-3b0d418c-125a-4e69-a82a-92d2455a2b08{top:661px;left:106px;position:absolute;z-index:121}#wsb-element-3b0d418c-125a-4e69-a82a-92d2455a2b08 .txt{width:190px;height:24px}#wsb-element-3348377e-41e5-4fca-970e-a6f4e0dc7f6f{top:545px;left:766px;position:absolute;z-index:47}#wsb-element-3348377e-41e5-4fca-970e-a6f4e0dc7f6f .wsb-image-inner{}#wsb-element-3348377e-41e5-4fca-970e-a6f4e0dc7f6f .wsb-image-inner div{width:73px;height:90px;position:relative;overflow:hidden}#wsb-element-3348377e-41e5-4fca-970e-a6f4e0dc7f6f img{position:absolute}#wsb-element-03e43838-8a8c-4da7-869d-b2044c9676d4{top:466px;left:357px;position:absolute;z-index:43}#wsb-element-03e43838-8a8c-4da7-869d-b2044c9676d4 .wsb-shape{width:281px;height:288px;padding:0px;background:transparent;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-ada7df3f-78da-4547-b3c0-0e4bda10989d{top:31px;left:41px;position:absolute;z-index:38}#wsb-element-ada7df3f-78da-4547-b3c0-0e4bda10989d .txt{width:470px;height:60px}#wsb-element-9a4532dd-ebb4-4c49-ac61-4d8e55999952{top:31px;left:616px;position:absolute;z-index:40}#wsb-element-9a4532dd-ebb4-4c49-ac61-4d8e55999952 .txt{width:409px;height:75px}#wsb-element-35a161f3-3fd6-41bd-9c0a-a0f0bf38b9d6{top:89px;left:43px;position:absolute;z-index:87}#wsb-element-35a161f3-3fd6-41bd-9c0a-a0f0bf38b9d6 .txt{width:300px;height:68px}#wsb-element-c5a39f26-d925-4c65-b11f-6bc91738087c{top:482px;left:751.5px;position:absolute;z-index:51}#wsb-element-c5a39f26-d925-4c65-b11f-6bc91738087c .txt{width:106px;height:37px}#wsb-element-accecd68-a5dd-436d-859f-c7c2324c30dc{top:482px;left:149px;position:absolute;z-index:87}#wsb-element-accecd68-a5dd-436d-859f-c7c2324c30dc .txt{width:106px;height:37px}#wsb-element-6c0cacb0-179f-48bc-8db5-5c864ab36b25{top:466px;left:62px;position:absolute;z-index:44}#wsb-element-6c0cacb0-179f-48bc-8db5-5c864ab36b25 .wsb-shape{width:281px;height:288px;padding:0px;background:transparent;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-65dd6251-10c2-408e-b9db-f5273a655514{top:482px;left:412px;position:absolute;z-index:98}#wsb-element-65dd6251-10c2-408e-b9db-f5273a655514 .txt{width:178px;height:37px}#wsb-element-52a1101a-d023-47e6-9a50-1f55f0d6d473{top:454px;left:51px;position:absolute;z-index:61}#wsb-element-52a1101a-d023-47e6-9a50-1f55f0d6d473 .wsb-shape{width:100px;height:80px;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-5081dfb9-0555-41a6-9dc0-621910248cb9{top:807px;left:175px;position:absolute;z-index:224}#wsb-element-5081dfb9-0555-41a6-9dc0-621910248cb9>div.form-row{width:574px;height:63px}#wsb-element-4bb25ce3-f0a8-4cc4-bc9d-45d412e594b4{top:0px;left:-460px;position:absolute;z-index:1}#wsb-element-4bb25ce3-f0a8-4cc4-bc9d-45d412e594b4 .wsb-image-inner{padding:0px}#wsb-element-4bb25ce3-f0a8-4cc4-bc9d-45d412e594b4 .wsb-image-inner div{width:1920px;height:305px;position:relative;overflow:hidden}#wsb-element-4bb25ce3-f0a8-4cc4-bc9d-45d412e594b4 img{position:absolute}#wsb-element-349bbbda-29bc-4b0e-abe7-9799e242469e{top:544px;left:469px;position:absolute;z-index:170}#wsb-element-349bbbda-29bc-4b0e-abe7-9799e242469e .wsb-image-inner{}#wsb-element-349bbbda-29bc-4b0e-abe7-9799e242469e .wsb-image-inner div{width:61px;height:90px;position:relative;overflow:hidden}#wsb-element-349bbbda-29bc-4b0e-abe7-9799e242469e img{position:absolute}#wsb-element-0d358066-cd83-4fa2-8b2d-953a85a58360{top:1393px;left:520px;position:absolute;z-index:130}#wsb-element-0d358066-cd83-4fa2-8b2d-953a85a58360>div{}#wsb-element-0d358066-cd83-4fa2-8b2d-953a85a58360 .map{width:512px;height:292px}#wsb-element-204f3633-9312-405b-9a6a-42d1a3b773bc{top:49px;left:-73px;position:absolute;z-index:69}#wsb-element-204f3633-9312-405b-9a6a-42d1a3b773bc{width:1146px;height:40px}#wsb-element-fcdb5afe-ed7a-457d-8d95-5222d367f4cf{top:1118px;left:175px;position:absolute;z-index:224}#wsb-element-fcdb5afe-ed7a-457d-8d95-5222d367f4cf>div.form-row{width:574px;height:92px}#wsb-element-f44922de-3920-41f6-ad8c-b76833d6a020{top:807px;left:159px;position:absolute;z-index:36}#wsb-element-f44922de-3920-41f6-ad8c-b76833d6a020 .wsb-shape{width:680px;height:472px;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-eabed802-b68b-40cc-9096-6e0056816bec{top:1014px;left:175px;position:absolute;z-index:224}#wsb-element-eabed802-b68b-40cc-9096-6e0056816bec>div.form-row{width:574px;height:99px}#wsb-element-5881ae57-1aa2-453e-b0a2-77904e2a37f2{top:454px;left:351px;position:absolute;z-index:66}#wsb-element-5881ae57-1aa2-453e-b0a2-77904e2a37f2 .wsb-shape{width:100px;height:80px;box-sizing:content-box;-moz-box-sizing:content-box}#wsb-element-539012b6-e03d-4481-9da3-db15c3e403cb{top:368px;left:200px;position:absolute;z-index:57}#wsb-element-539012b6-e03d-4481-9da3-db15c3e403cb .txt{width:600px;height:37px}#wsb-element-4e6c5585-7fe4-483a-8ec4-d488eec5bed8{top:1393px;left:-51px;position:absolute;z-index:218}#wsb-element-4e6c5585-7fe4-483a-8ec4-d488eec5bed8 .wsb-image-inner{}#wsb-element-4e6c5585-7fe4-483a-8ec4-d488eec5bed8 .wsb-image-inner div{width:544px;height:288.34px;position:relative;overflow:hidden}#wsb-element-4e6c5585-7fe4-483a-8ec4-d488eec5bed8 img{position:absolute}#wsb-element-47a5ae69-6bc0-4b3a-b95a-957beecdb7e1{top:946px;left:175px;position:absolute;z-index:224}#wsb-element-47a5ae69-6bc0-4b3a-b95a-957beecdb7e1>div.form-row{width:574px;height:63px}#wsb-element-2d8d9144-1861-4c65-9953-0a6c29b1a0a3{top:551px;left:156px;position:absolute;z-index:167}#wsb-element-2d8d9144-1861-4c65-9953-0a6c29b1a0a3 .wsb-image-inner{}#wsb-element-2d8d9144-1861-4c65-9953-0a6c29b1a0a3 .wsb-image-inner div{width:89px;height:61px;position:relative;overflow:hidden}#wsb-element-2d8d9144-1861-4c65-9953-0a6c29b1a0a3 img{position:absolute}
</style>
<div class="wsb-canvas body">
	<div class="wsb-canvas-page-container" style="min-height: 100%; padding-top: 0px; position: relative;">
		<div class="wsb-canvas-scrollable" style="background-color: #27455b; background-position-x: center; background-position-y: center; background-position: center center; background-repeat: repeat; position: absolute; width: 100%; height: 100%;"></div>
		<div class="wsb-canvas-page page" id="wsb-canvas-template-page" style="height: 1685px; margin: auto; width: 1000px; background-color: #27455b; position: relative;">
			<div id="wsb-canvas-template-container" style="position: absolute;">
				<div class="wsb-element-text" data-type="element" id="wsb-element-e01f6c0c-4c9b-484d-8e0a-02ac04b7d245">
					<div class="txt">
						<p style="text-align: center;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;">1601 East 69th Street, Suite 306<br>
						​Sioux Falls, SD 57108.<br>
						<em>​Use the map below for directions.</em></span></span></p>
						<p style="text-align: center;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><em>​(By Appointment Only.)</em></span></span><br></p><span style="font-size:14px;"></span>
					</div>
				</div>
				<div class="wsb-element-shape" data-type="element" id="wsb-element-c62746dd-c638-4c20-a404-7fed00a36123">
					<div class="wsb-shape customStyle"></div>
				</div>






				<!--div class="wsb-element-customform" data-type="element" id="wsb-element-9c943bbb-720a-4e5f-88bc-f4b42ccdf7ee">
					<div class="form customform form-row allow-select" data-aid="elm-container-9c943bbb-720a-4e5f-88bc-f4b42ccdf7ee">
						<div data-label-container-groupid="1-desktop">
							<label class="form-label" for="elm-9c943bbb-720a-4e5f-88bc-f4b42ccdf7ee">Email: <span class="form-req">*</span></label>
						</div>
						<div data-field-container-groupid="1-desktop">
							<input class="form-value" data-content="" data-formtype="email" data-gemsubmit="false" data-groupid="1-desktop" data-label="Email:" id="elm-9c943bbb-720a-4e5f-88bc-f4b42ccdf7ee" name="elm-9c943bbb-720a-4e5f-88bc-f4b42ccdf7ee" placeholder="Enter email address" required="true" type="email">
						</div>
					</div>
				</div-->


				<div class="wsb-element-text" data-type="element" id="wsb-element-91a8faeb-f4cc-4715-85ef-f07e70cb8724">
					<div class="txt">
						<p style="text-align: center;">605.330.9997</p><span style="font-size:14px;"></span>
					</div>
				</div>
				<div class="wsb-element-shape" data-type="element" id="wsb-element-8fd4bacb-6384-4391-8b36-370988a53d31">
					<div class="wsb-shape customStyle"></div>
				</div>
				<div class="wsb-element-shape" data-type="element" id="wsb-element-873c1a93-e49d-4620-91e6-a532b22cc0c0">
					<div class="wsb-shape shape_contact_red"></div>
				</div>
				<div class="wsb-element-text" data-type="element" id="wsb-element-3b0d418c-125a-4e69-a82a-92d2455a2b08">
					<div class="txt">
						<pre style="font-family: inherit; text-align: center;"><a href="mailto:brenda@bhmtherapy.com" style="" target=""><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">brenda@bhmtherapy.com</span></span></a></pre>
					</div>
				</div>
				<div class="wsb-element-image" data-type="element" id="wsb-element-3348377e-41e5-4fca-970e-a6f4e0dc7f6f">
					<div class="wsb-image-inner">
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/inc/static/022bd5569568d8ccdb4e441298d3e005.jpg" style="vertical-align:middle;width:73px;height:90px;"></div>
					</div>
				</div>
				<div class="wsb-element-shape" data-type="element" id="wsb-element-03e43838-8a8c-4da7-869d-b2044c9676d4">
					<div class="wsb-shape customStyle"></div>
				</div>
				<div class="wsb-element-text" data-type="element" id="wsb-element-c5a39f26-d925-4c65-b11f-6bc91738087c">
					<div class="txt">
						<div style="text-align: center;">
							<span class="editor_contact_visit">Location</span><span class="editor_contact_green"></span>
						</div>
					</div>
				</div>
				<div class="wsb-element-text" data-type="element" id="wsb-element-accecd68-a5dd-436d-859f-c7c2324c30dc">
					<div class="txt">
						<div style="text-align: center;">
							<span class="editor_contact_email">Email</span>
						</div>
					</div>
				</div>
				<div class="wsb-element-shape" data-type="element" id="wsb-element-6c0cacb0-179f-48bc-8db5-5c864ab36b25">
					<div class="wsb-shape customStyle"></div>
				</div>
				<div class="wsb-element-text" data-type="element" id="wsb-element-65dd6251-10c2-408e-b9db-f5273a655514">
					<div class="txt">
						<div style="text-align: center;">
							<span class="editor_contact_call">Call or Text</span><span class="editor_contact_green"></span>
						</div>
					</div>
				</div>
				<div class="wsb-element-shape" data-type="element" id="wsb-element-52a1101a-d023-47e6-9a50-1f55f0d6d473">
					<div class="wsb-shape shape_contact_green"></div>
				</div>
				<!--div class="wsb-element-customform" data-type="element" id="wsb-element-5081dfb9-0555-41a6-9dc0-621910248cb9">
					<div class="form customform form-row allow-select" data-aid="elm-container-5081dfb9-0555-41a6-9dc0-621910248cb9">
						<div data-label-container-groupid="1-desktop">
							<label class="form-label" for="elm-5081dfb9-0555-41a6-9dc0-621910248cb9">Name: <span class="form-req">*</span></label>
						</div>
						<div data-field-container-groupid="1-desktop">
							<input class="form-value" data-content="" data-formtype="input" data-groupid="1-desktop" data-label="Name:" data-namefield="true" id="elm-5081dfb9-0555-41a6-9dc0-621910248cb9" name="elm-5081dfb9-0555-41a6-9dc0-621910248cb9" placeholder="Enter text here" required="true" type="text">
						</div>
					</div>
				</div-->



<div class="wsb-element-customform" data-type="element" id="wsb-element-5081dfb9-0555-41a6-9dc0-621910248cb9">

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









				<div class="wsb-element-image" data-type="element" id="wsb-element-4bb25ce3-f0a8-4cc4-bc9d-45d412e594b4">
					<div class="wsb-image-inner">
						<div class="customStyle"><img src="<?php echo get_template_directory_uri(); ?>/inc/static/553e335f4b5c749fbef516721160b76e.jpg" style="vertical-align:middle;width:1920px;height:305px;"></div>
					</div>
				</div>
				<div class="wsb-element-image" data-type="element" id="wsb-element-349bbbda-29bc-4b0e-abe7-9799e242469e">
					<div class="wsb-image-inner">
						<div class="img">
							<a href="tel:605-330-9997" rel=""><img src="<?php echo get_template_directory_uri(); ?>/inc/static/3215d50212762b1c431b854aef6a3ea2.jpg" style="vertical-align:middle;width:61px;height:90px;"></a>
						</div>
					</div>
				</div>
				<div class="wsb-element-map" data-type="element" id="wsb-element-0d358066-cd83-4fa2-8b2d-953a85a58360">
					<div>
						<div class="map">
							<div id="publish-map-0d358066-cd83-4fa2-8b2d-953a85a58360" style="width: 100%; height: 100%"></div>
							<div style="overflow:hidden">
								<a class="larger-map-link" href="http://maps.google.com/maps?v=2&amp;f=q&amp;ie=UTF8&amp;t=m&amp;iwloc=&amp;q=1601+E+69th+St%2c+Sioux+Falls%2c+South+Dakota+57108%2c+United+States&amp;z=14&amp;source=embed" target="_blank">View Larger Map</a>
							</div>
						</div>
					</div>
					<script type="text/javascript">
					if('True' === 'True' && 'True' === 'True') { require(['common/geo/mapbox'], function (mapbox) { var mapboxDiv = document.getElementById('publish-map-0d358066-cd83-4fa2-8b2d-953a85a58360'); var key = 'pk.eyJ1IjoiZ29kYWRkeSIsImEiOiJjaWc5b20wcjcwczAydGFsdGxvamdvYnV0In0.JK9HuO6nAzc8BnMv6W7NBQ'; mapbox.generateMap(mapboxDiv, "1601 E 69th St, Sioux Falls, South Dakota 57108, United States", { zoom: 14, lat: 43.488722, lng: -96.704694}, key, 'publish', "https://api.mapbox.com/geocoding/v5/mapbox.places/{0}.json?access_token="); }); } else { require(['common/geo/mapGenerator'], function (mapGenerator) { var gmapDiv = document.getElementById('publish-map-0d358066-cd83-4fa2-8b2d-953a85a58360'); var addressSelector = '[data-formType="address"]'; var addressInputs = $(addressSelector); var clientId = 'gme-godaddycom'; var channel = 'v7-published'; var publishDate = new Date('2015-02-26T16:19:56.1970000'); var grandfatherDate = new Date('2016-05-22T00:00:00.0000000'); if (publishDate < grandfatherDate && addressInputs.length == 0) { clientId = null; channel = null; } if ('True' === 'True') { mapGenerator.runPublishMode(clientId, channel, "js!//maps.googleapis.com/maps/api/js?v=3.27&libraries=places,geometry"); } else { mapGenerator.runEditorMode(); } mapGenerator.drawMap(gmapDiv, "1601 E 69th St, Sioux Falls, South Dakota 57108, United States", { zoom: 14 }); }); }
					</script>
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






				<!--div class="wsb-element-customform" data-type="element" id="wsb-element-fcdb5afe-ed7a-457d-8d95-5222d367f4cf">
					<div class="form customform form-row allow-select" data-aid="elm-container-fcdb5afe-ed7a-457d-8d95-5222d367f4cf">
						<div>
							<input class="form-submit" data-aid="submit-fcdb5afe-ed7a-457d-8d95-5222d367f4cf-desktop" data-content="" data-groupid="1-desktop" type="button" value="Submit">
						</div>
						<div class="form-message" id="formMsgBox-desktop-fcdb5afe-ed7a-457d-8d95-5222d367f4cf" style="display: none;">
							Thank you for contacting us! If needed, you will hear back within 48-72 hours.
						</div>
						<script type="text/javascript">
						require(['designer/app/builder/ui/canvas/elements/customform/customForm.published'], function (customForm) { customForm.initializeSubmitButton({"groupId":"1-desktop","groupIdInt":1,"elementId":"fcdb5afe-ed7a-457d-8d95-5222d367f4cf","domainName":"bhmtherapy.com","resellerId":1,"subject":"bhmtherapy.com CONTACT: Form Submission","emailHashList":"brenda@bhmtherapy.com","showMessage":true,"gemSubmit":false,"postRedirectUrl":null,"renderMode":"desktop","isPreview":false,"mailerUrl":"https://sitesupport-v7.websitetonight.com/api/CustomFormMailer/Submit","labelOrientation":"1","labelCssClass":"form-label-adjacent","fieldCssClass":"form-field-adjacent","messageBoxId":"formMsgBox-desktop-fcdb5afe-ed7a-457d-8d95-5222d367f4cf","fieldFormatByType":{"input":"Text {num}:","radio":"Multiple Choice {num}:","checkbox":"Checkbox {num}:","dropdown":"Drop Down {num}:","file":"Submitted File {num}:","date":"Date/Time {num}:","address":"Address {num}:","phone":"Phone {num}:","email":"Email Address {num}:"},"requiredValidationMessage":"This is a required field.","lengthValidationMessage":"Field is limited to 100 characters.","longLengthValidationMessage":"Field is limited to 4000 characters.","emailValidationMessage":"Invalid email address.","dateValidationMessage":"Invalid date/time value.","errorTitle":"Try Again","sendErrorMessage":"Unknown error occurred. Please try again.","tooManyRequestsErrorTitle":"Whoa, slow down","tooManyRequestsErrorMessage":"We're working feverishly to process your request. Please wait a few seconds and try again.","websiteId":"00000000-0000-0000-0000-000398894188","orionId":"36a52be2-39fa-11e4-9732-14feb5d39f6a","gemSubmitUrl":"https://apps.api.godaddy.com/v1/apps/madmimi/v1/subscriber","googleMapsClientId":"gme-godaddycom","googleMapsPublishedChannel":"v7-published","mapboxApiKey":"pk.eyJ1IjoiZ29kYWRkeSIsImEiOiJjaWc5b20wcjcwczAydGFsdGxvamdvYnV0In0.JK9HuO6nAzc8BnMv6W7NBQ","isMapboxApiEnabled":true,"googleMapsApiBaseUrl":"js!//maps.googleapis.com/maps/api/js?v=3.27&libraries=places,geometry","mapboxApiBaseUrl":"https://api.mapbox.com/geocoding/v5/mapbox.places/{0}.json?access_token="}); });
						</script>
					</div>
				</div>






				<div class="wsb-element-shape" data-type="element" id="wsb-element-f44922de-3920-41f6-ad8c-b76833d6a020">
					<div class="wsb-shape shape_theme_callout"></div>
				</div>
				<div class="wsb-element-customform" data-type="element" id="wsb-element-eabed802-b68b-40cc-9096-6e0056816bec">
					<div class="form customform form-row allow-select" data-aid="elm-container-eabed802-b68b-40cc-9096-6e0056816bec">
						<div data-label-container-groupid="1-desktop">
							<label class="form-label" for="elm-eabed802-b68b-40cc-9096-6e0056816bec">Message: <span class="form-req">*</span></label>
						</div>
						<div data-field-container-groupid="1-desktop">
							<textarea class="form-value" data-content="" data-formtype="paragraph" data-groupid="1-desktop" data-label="Message:" id="elm-eabed802-b68b-40cc-9096-6e0056816bec" placeholder="Enter your comment here" required="true"></textarea>
						</div>
					</div>
				</div>
				<div class="wsb-element-shape" data-type="element" id="wsb-element-5881ae57-1aa2-453e-b0a2-77904e2a37f2">
					<div class="wsb-shape shape_contact_yellow"></div>
				</div-->








				<div class="wsb-element-text" data-type="element" id="wsb-element-539012b6-e03d-4481-9da3-db15c3e403cb">
					<div class="txt">
						<p style="text-align: center;"><span style="font-size:24px;"><strong><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#696969;">Contact Brenda.</span></span></strong></span></p>
					</div>
				</div>



				<div class="wsb-element-image" data-type="element" id="wsb-element-4e6c5585-7fe4-483a-8ec4-d488eec5bed8">
					<div class="wsb-image-inner">
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/inc/static/158afede4742b2c8f1655e9262d22f87.jpg" style="vertical-align:middle;width:544px;height:288px;"></div>
					</div>
				</div>
				<!--div class="wsb-element-customform" data-type="element" id="wsb-element-47a5ae69-6bc0-4b3a-b95a-957beecdb7e1">
					<div class="form customform form-row allow-select" data-aid="elm-container-47a5ae69-6bc0-4b3a-b95a-957beecdb7e1">
						<div data-label-container-groupid="1-desktop">
							<label class="form-label" for="elm-47a5ae69-6bc0-4b3a-b95a-957beecdb7e1">Subject: <span class="form-req">*</span></label>
						</div>
						<div data-field-container-groupid="1-desktop">
							<input class="form-value" data-content="" data-formtype="input" data-groupid="1-desktop" data-label="Subject:" id="elm-47a5ae69-6bc0-4b3a-b95a-957beecdb7e1" name="elm-47a5ae69-6bc0-4b3a-b95a-957beecdb7e1" placeholder="Enter text here" required="true" type="text">
						</div>
					</div>
				</div-->







				<div class="wsb-element-image" data-type="element" id="wsb-element-2d8d9144-1861-4c65-9953-0a6c29b1a0a3">
					<div class="wsb-image-inner">
						<div class="img">
							<a href="mailto:brenda@bhmtherapy.com" rel=""><img src="<?php echo get_template_directory_uri(); ?>/inc/static/3f54511cf1dc61a277ca3845496161f5.jpg" style="vertical-align:middle;width:89px;height:61px;"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wsb-canvas-page-footer footer" id="wsb-canvas-template-footer" style="margin: auto; min-height:100px; height: 157px; width: 1000px; position: relative;">
			<div class="footer-container" id="wsb-canvas-template-footer-container" style="position: absolute">
				<div class="wsb-element-text" id="wsb-element-ada7df3f-78da-4547-b3c0-0e4bda10989d">
					<div class="txt">
						<p><span style="font-family:arial,helvetica,sans-serif;"></span><br></p>
						<p><span style="font-family:arial,helvetica,sans-serif;">1601 East 69th Street, Suite 306, Sioux Falls, SD 57108</span></p>
						<pre style="font-family:inherit"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://www.bhmtherapy.com/home.html" target="">Get Directions »</a></span></pre>
					</div>
				</div>
				<div class="wsb-element-text" id="wsb-element-9a4532dd-ebb4-4c49-ac61-4d8e55999952">
					<div class="txt">
						<pre style="text-align: center;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><br>​Copyright © Brenda Hansen-Mayer Professional Counselor.<br>​All rights reserved. Site by </span></span><span style="font-family:arial,helvetica,sans-serif;"><a href="http://www.kravebranding.com/" target="_blank">Krave Branding, LLC.</a></span><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"></span></span><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"></span></span></pre>
					</div>
				</div>
				<div class="wsb-element-text" id="wsb-element-35a161f3-3fd6-41bd-9c0a-a0f0bf38b9d6">
					<div class="txt">
						<p><span style="font-family:arial,helvetica,sans-serif;">​</span><br></p>
						<p><span style="font-family:arial,helvetica,sans-serif;">605.330.9997 •&nbsp;​<a href="http://www.bhmtherapy.com/home.html" target=""></a><a href="mailto:brenda@bhmtherapy.com" target="_blank">brenda@bhmtherapy.com</a></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="view-as-mobile" style="padding:10px;position:relative;text-align:center;display:none;">
			<a href="http://www.bhmtherapy.com/contact.html#" onclick="return false;">View on Mobile</a>
		</div>
	</div>
</div>
<script type="text/javascript">
require(['jquery', 'common/cookiemanager/cookiemanager', 'designer/iebackground/iebackground'], function ($, cookieManager, bg) { if (cookieManager.getCookie("WSB.ForceDesktop")) { $('.view-as-mobile', '.wsb-canvas-page-container').show().find('a').bind('click', function () { cookieManager.eraseCookie("WSB.ForceDesktop"); window.location.reload(true); }); } bg.fixBackground(); });
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-66245016-1', 'auto'); ga('send', 'pageview');
</script>
<script>
function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}"undefined"==typeof _trfd&&(window._trfd=[]),_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({ap:"WSBv7",ds:tccl_dpsid()||"-1"});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/static/tcc_l.combined.1.0.5.min.js">
</script>
</body>
</html>
