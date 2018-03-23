<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_X_Starter_Theme
 */

?>

	</div><!-- #content -->

<?php /*
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'xstart' ) ); ?>"><?php

				printf( esc_html__( 'Proudly powered by %s', 'xstart' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php

				printf( esc_html__( 'Theme: %1$s by %2$s.', 'xstart' ), 'xstart', '<a href="https://devcabin.com">George Featherstone</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


*/ ?>


<div class="wsb-canvas-page-footer footer" id="wsb-canvas-template-footer" style="margin: auto; min-height:100px; height: 157px; width: 1000px; position: relative;">
	<div class="footer-container" id="wsb-canvas-template-footer-container" style="position: absolute">
		<div class="wsb-element-text" id="wsb-element-ada7df3f-78da-4547-b3c0-0e4bda10989d">
			<div class="txt">
				<p><span style="font-family:arial,helvetica,sans-serif;"></span><br></p>
				<p><span style="font-family:arial,helvetica,sans-serif;">1601 East 69th Street, Suite 306, Sioux Falls, SD 57108</span></p>
				<pre style="font-family:inherit"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://www.bhmtherapy.com/home.html" target="">Get Directions »</a></span></pre>
			</div>
		</div>
		<div class="wsb-element-text" id="wsb-element-35a161f3-3fd6-41bd-9c0a-a0f0bf38b9d6">
			<div class="txt">
				<p><span style="font-family:arial,helvetica,sans-serif;">​</span><br></p>
				<p><span style="font-family:arial,helvetica,sans-serif;">605.330.9997 •&nbsp;​<a href="http://www.bhmtherapy.com/home.html" target=""></a><a href="mailto:brenda@bhmtherapy.com" target="_blank">brenda@bhmtherapy.com</a></span></p>
			</div>
		</div>
		<div class="wsb-element-text" id="wsb-element-9a4532dd-ebb4-4c49-ac61-4d8e55999952">
			<div class="txt">
				<pre style="text-align: center;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><br>​Copyright © Brenda Hansen-Mayer Professional Counselor.<br>​All rights reserved. Site by </span></span><span style="font-family:arial,helvetica,sans-serif;"><a href="http://www.kravebranding.com/" target="_blank">Krave Branding, LLC.</a></span><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"></span></span><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"></span></span></pre>
			</div>
		</div>
	</div>
</div>
<div class="view-as-mobile" style="padding:10px;position:relative;text-align:center;display:none;">
	<a href="http://www.bhmtherapy.com/about-bhm.html#" onclick="return false;">View on Mobile</a>
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


<?php wp_footer(); ?>

</body>
</html>
