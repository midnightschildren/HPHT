<?php
/**
 * Template Name: Home Page Template
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content row" role="main">

<div class="col grid-12 green">
	<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-top">
			<?php $custom_query = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 1));
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2 class="eccWhite"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>

			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>

		</div>	
	</div>

</div>
			
		


		<div class="col grid-12 pad-3-vert s-pad-3-top s-pad-1-bottom">
		<div class="eccla_wrapper">
		<div class="col grid-12">
			<div class="col m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10 pad-1-bottom"><h2 class="eccRed">Heritage Trust on Facebook</h2></div>
			<div class="col m-grid-1">&nbsp;</div>
		</div>
		<div class="col grid-12">
			<div class="col m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10">
				<?php echo do_shortcode('[custom-facebook-feed]'); ?>
			</div>
			<div class="col m-grid-1">&nbsp;</div>
		</div>	
			<div class="col grid-12">
				<div class="btn-wrapper pad-3-top">
				<a href="https://www.facebook.com/ECCLAConnects/"><div class="btn">Connect</div></a>	
				</div>
			</div>
		</div>	
		</div> <!-- /.col.grid_12_of_12 -->

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
