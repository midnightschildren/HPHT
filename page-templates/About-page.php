<?php
/**
 * Template Name: About Page Template
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content" role="main">

		<div class="col grid-12 about">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page-a' ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_12_of_12 -->

<div class="white-content">
<div class="eccla_wrapper">
<div class="col grid-12">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11 m-grid-10"><h2 class="eccRed pad-3-top pad-2-bottom">Staff</h2>
<div class="col grid-12 pad-3-bottom">
	
<?php $custom_query = new WP_Query(array('post_type' => 'staff')); // only FAQ Post Type
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<?php 	
				$content = apply_filters( 'the_content', get_the_content() );
				$content = str_replace( ']]>', ']]&gt;', $content );
				$stitle = apply_filters( 'the_title', get_the_title() );
				$stitle = str_replace( ']]>', ']]&gt;', $stitle );
				$position = get_field( "position" );
				$t = '[toggle title= \'<div class=\"grid-11\">';
				$t.= $stitle;
				$t.= ', <span class=\"position\">';
				$t.= $position;
				$t.= '</span>';
				$t.= '</div><div class=\"grid-1\"><span class=\"tswitch\"></span></div>';
				$t.= '\']';
			   	$t.= $content;
			   	$t.= '[/toggle]';
			   	echo do_shortcode ($t); ?>

	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
</div>
</div>
</div>

<div class="col grid-12 pad-3-bottom">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11 m-grid-10"><h2 class="eccRed pad-2-bottom">Board</h2>
<div class="col grid-12 pad-3-bottom">
	
<?php $custom_query = new WP_Query(array('post_type' => 'board')); // only FAQ Post Type
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<?php 	
				$content = apply_filters( 'the_content', get_the_content() );
				$content = str_replace( ']]>', ']]&gt;', $content );
				$stitle = apply_filters( 'the_title', get_the_title() );
				$stitle = str_replace( ']]>', ']]&gt;', $stitle );
				$position = get_field( "position" );
				$t = '[toggle title= \'<div class=\"grid-11\">';
				$t.= $stitle;
				$t.= ', <span class=\"position\">';
				$t.= $position;
				$t.= '</span>';
				$t.= '</div><div class=\"grid-1\"><span class=\"tswitch\"></span></div>';
				$t.= '\']';
			   	$t.= $content;
			   	$t.= '[/toggle]';
			   	echo do_shortcode ($t); ?>


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
				<div class="col grid-1half m-grid-1">&nbsp;</div>
				<div class="col grid-11sp m-grid-10">
					<div class="col grid-12">
					<h2 class="eccRed">Partner Institutions</h2>
					</div>
					<div class="col grid-12 pad-2-top">
						<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '150' ); } ?>
					</div>

				</div>
				
		</div>
</div>

		<div class="col grid-12 map">

		<div class="background">
			<div class="background-image background-left" style="background-image:url(http://eccla.codisattva.com/wp-content/uploads/2016/01/ECCLA_WebMap-FPO2.jpg)"></div>
			<div class="background-image background-middle" style="background-image:url(http://eccla.codisattva.com/wp-content/uploads/2016/01/ECCLA_WebMap-FPO2.jpg)"></div>
			<div class="background-image background-right" style="background-image:url(http://eccla.codisattva.com/wp-content/uploads/2016/01/ECCLA_WebMap-FPO2.jpg)"></div>

			
				<div class="service-btn pad-3-bottom">
					<div class="eccla_wrapper">
						<div class="greybox"><h2>Service Area</h2></div>
					</div>
				</div>
				<div class="btn-wrapper vmap">
					<a href="/service-area/"><div class="btn gbtn">View Map</div></a>	
				</div>
							
		</div>
		</div>


		

</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
