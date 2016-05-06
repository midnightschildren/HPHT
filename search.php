<?php
/**
 * The template for displaying Search Results.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content row" role="main">


		<div class="col grid-12">

			<?php if ( have_posts() ) : ?>

<div class="entry-content">
		<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-vert top-content">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10">
			<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for %s', 'quark' ), '<span>&ldquo;' . get_search_query() . '&rdquo;</span>' ); ?></h1>
			
			</div>
			<div class="col grid-1half m-grid-1">&nbsp;</div>
		</div>
		</div>
</div><!-- /.entry-content -->

		<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-vert top-content">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10">



				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'search' ); ?>
				<?php endwhile; ?>

				<?php quark_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

		</div>
			<div class="col grid-1half m-grid-1">&nbsp;</div>
		</div>
		</div>

		</div> <!-- /.col.grid_8_of_12 -->
		

	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
