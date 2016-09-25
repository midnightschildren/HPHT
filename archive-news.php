<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content row" role="main">
<div class="col grid-12 slate pad-3-vert">

	<div class="eccla_wrapper">
		
		<div class="col grid-12 pad-3-vert">

			

				
					<h1 class="eccWhite">Heritage Trust News</h1>
				



		</div>

	</div>

</div>


<div class="col grid-12 ivory">

	<div class="eccla_wrapper">
		
		<div class="col grid-12 pad-3-top">

			<?php if ( have_posts() ) : ?>

				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="grid-12 pad-3-vert">
						<?php get_template_part( 'content-news' ); // Include the Post-Format-specific template for the content ?>
					</div>
				<?php endwhile; ?>

				<?php quark_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_8_of_12 -->
		
	</div>
	
</div>

<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-vert">
				<div class="col m-grid-1">&nbsp;</div>
				<div class="col grid-11sp m-grid-10">
					<div class="col grid-12">
					<h2 class="eccRed">Sponsors</h2>
					</div>
					<div class="col grid-12 pad-2-top">
						<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '31' ); } ?>
					</div>

				</div>
				
		</div>
</div>		
</div>
	 <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
