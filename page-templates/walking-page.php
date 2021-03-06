<?php
/**
 * Template Name: Walking Tour Page Template
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content row" role="main">

<div class="col grid-12 shutter_green">

	<div class="eccla_wrapper">
		<div class="col grid-12">
			<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '116' ); } ?>
		
		</div>	
		<div class="col grid-12 pad-3-top">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if( get_field('alternative_title') ): ?>
						<h2 class="eccWhite"><?php the_field('alternative_title'); ?></h2>
					<?php else: ?>
						<h2 class="eccWhite"><?php the_title(); ?></h2>
					<?php endif; ?>	
					<div class="preservation pad-3-vert">
						<?php the_content(); ?>
					</div>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

			
			<?php wp_reset_postdata(); // reset the query ?>

		</div>

	</div>

</div>
			

<div class="col grid-12 ivory">

	<div class="eccla_wrapper">
		
		<div class="col grid-12 pad-3-top">


					<h2><?php the_field('section_title'); ?></h2>
					<div class="trust grid-10 offset-2 pad-3-vert">
						<?php the_field('section_content'); ?>
					</div>
			

		</div>

	</div>

</div>

<div class="col grid-12 pad-3-bottom byellow">
<div class="eccla_wrapper">

<div class="col m-grid-1">&nbsp;</div>
<div class="col grid-11"><h2 class="eccRed pad-3-top pad-2-bottom">Upcoming Events</h2>
<div class="col grid-2 s-grid-none m-grid-none">&nbsp;</div>
<div class="col grid-10 s-grid-12 m-grid-11">
	<div class="col grid-10 s-grid-12 m-grid-12 pad-3-bottom">
<?php $custom_query = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 1));
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h4 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php the_excerpt(); ?>

	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	</div>
</div>



</div>
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
	</div><!-- /#primary.site-content.row -->
			
<?php get_footer(); ?>
