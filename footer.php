<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

		<?php	do_action( 'quark_after_woocommerce' ); ?>
	</div> <!-- /#maincontentcontainer -->

	<div id="footercontainer">

		<footer class="site-footer row" role="contentinfo">

			<div class="col redht grid-12 pad-3-bottom">
			<div class="eccla_wrapper">
				

			<?php
			// Count how many footer sidebars are active so we can work out how many containers we need
			$footerSidebars = 0;
			for ( $x=1; $x<=4; $x++ ) {
				if ( is_active_sidebar( 'sidebar-footer' . $x ) ) {
					$footerSidebars++;
				}
			}

			// If there's one or more one active sidebars, create a row and add them
			if ( $footerSidebars > 0 ) { ?>
				<?php
				// Work out the container class name based on the number of active footer sidebars
				$containerClass = "grid-12";

				// Display the active footer sidebars
				for ( $x=1; $x<=4; $x++ ) {
					if ( is_active_sidebar( 'sidebar-footer'. $x ) ) { ?>
					<div class="row grid-12">
						
						<div class="col <?php echo $containerClass?>" style="padding-left: 2%; padding-right: 2%;">
							<div class="widget-area" role="complementary">
								<?php dynamic_sidebar( 'sidebar-footer'. $x ); ?>
							</div>
						</div> <!-- /.col.<?php echo $containerClass?> -->
						
					</div>	
					<?php }
				} ?>

			<?php } ?>
				<div class="col grid-12 pad-2-bottom s-pad-3-sides">
				<p class="copyright">Highland Park Heritage Trust<br />
				PO Box 50894<br />
				Los Angeles, CA 90050-0894<br />
				(323) 908-4127<br />
				<a href="mailto:info@hpht.org">info@hpht.org</a><br /><br />	
				Copyright © <?php echo date('Y'); ?> Highland Park Heritage Trust. All rights reserved.</p>
				</div>
			</div>
			</div>
		</footer> <!-- /.site-footer.row -->

		

	</div> <!-- /.footercontainer -->

</div> <!-- /.#wrapper.hfeed.site -->

<?php wp_footer(); ?>
<style type="text/css">
    @media only screen and (max-width: 800px) {
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-2-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-3-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-4-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-5-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-6-columns .envira-gallery-item {
            width: 50% !important
        }
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-2-columns .envira-gallery-item:nth-child(3n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-2-columns .envira-gallery-item:nth-child(4n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-2-columns .envira-gallery-item:nth-child(5n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-2-columns .envira-gallery-item:nth-child(6n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-3-columns .envira-gallery-item:nth-child(3n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-3-columns .envira-gallery-item:nth-child(4n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-3-columns .envira-gallery-item:nth-child(5n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-3-columns .envira-gallery-item:nth-child(6n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-4-columns .envira-gallery-item:nth-child(3n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-4-columns .envira-gallery-item:nth-child(4n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-4-columns .envira-gallery-item:nth-child(5n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-4-columns .envira-gallery-item:nth-child(6n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-5-columns .envira-gallery-item:nth-child(3n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-5-columns .envira-gallery-item:nth-child(4n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-5-columns .envira-gallery-item:nth-child(5n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-5-columns .envira-gallery-item:nth-child(6n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-6-columns .envira-gallery-item:nth-child(3n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-6-columns .envira-gallery-item:nth-child(4n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-6-columns .envira-gallery-item:nth-child(5n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-6-columns .envira-gallery-item:nth-child(6n+1) {
            clear: none !important
        }
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-2-columns .envira-gallery-item:nth-child(2n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-3-columns .envira-gallery-item:nth-child(2n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-4-columns .envira-gallery-item:nth-child(2n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-5-columns .envira-gallery-item:nth-child(2n+1),
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-6-columns .envira-gallery-item:nth-child(2n+1) {
            clear: both !important
        }
        .envira-gallery-wrap .envira-gallery-public.enviratope .envira-gallery-item {
            clear: none !important
        }
    }
    
    @media only screen and (max-width: 550px) {
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-1-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-2-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-3-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-4-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-5-columns .envira-gallery-item,
        .envira-gallery-wrap .envira-gallery-public.envira-gallery-6-columns .envira-gallery-item {
            width: 100% !important
        }
        .envira-gallery-wrap .envira-gallery-public .envira-gallery-item img {
        	max-width: 60%;
        }
    }

</style>

<style type="text/css">@media only screen and (max-width: 550px) {#responsive_menu_pro_button {width: 15%;background: #FFFFFF;}}</style>

</body>

</html>
