<?php
/**
 * Template Name: Full-width Page Template
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content row" role="main">
	<div class="rowflex">
		<div class="col grid-6 pad-3-vert blue colflex">
			<div class="col grid-2">&nbsp;</div>
			<div class="col grid-10 pad-3-vert pad-3-right">
			<?php if(function_exists('show_text_block')) { echo show_text_block('education-resources', true); } ?>
			</div>

			<div class="col grid-2">&nbsp;</div>
			<div class="col grid-10 pad-3-right">
				
				<div class="btn-wrapper pad-3-bottom">
				<a href="/educational-resources/"><div class="btn">Learn more</div></a>	
				</div>
				
			</div>
			

		</div>
		<div class="col grid-6 pad-3-vert orange colflex">
			<div class="col grid-10 pad-3-vert pad-3-left">
			<?php if(function_exists('show_text_block')) { echo show_text_block('fiscal-sponsorship', true); } ?>
			</div>
			<div class="col grid-2">&nbsp;</div>

			<div class="col grid-10 pad-3-left">
				
				<div class="btn-wrapper pad-3-bottom">
				<a href="/fiscal-sponsorship/"><div class="btn">Learn more</div></a>	
				</div>
				
			</div>
			<div class="col grid-2">&nbsp;</div>

		</div>
	</div>
		<div class="col grid-12">

		<figure class="fixedratio">
				<div class="service-btn pad-3-bottom">
					<div class="greybox"><h2>Service Area</h2></div>
				</div>
				<div class="btn-wrapper vmap">
					<a href="/service-area/"><div class="btn gbtn">View Map</div></a>	
				</div>			
		</figure>
		</div>
		<div class="col grid-12">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_12_of_12 -->
	</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
