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
<?php while ( have_posts() ) : the_post(); ?>
<div id="callout">
	<div class="rowflex eccla_wrapper">
		<div class="col grid-6 s-grid-12 m-grid-12 m-blue pad-3-top colflex">
			<div class="col grid-1 s-grid-1half">&nbsp;</div>
			<div class="col grid-11 s-grid-11 m-grid-10 pad-3-vert s-pad-0-top s-pad-1-bottom s-pad-0-sides m-pad-0-sides pad-3-right">
			<?php if( get_field('blue_callout_title') ): ?>	
			<h1><?php the_field('blue_callout_title'); ?></h1>
			<h3><?php the_field('blue_callout_text'); ?></h3>
			<?php endif; ?>
			</div>
			<div class="btn-wrapper pad-3-bottom s-pad-1-bottom l-grid-none">
				<a href="/educational-resources/"><div class="btn">Learn more</div></a>	
			</div>
			<div class="col s-grid-none m-grid-1">&nbsp;</div>
		</div>
		<div class="col grid-6 s-grid-12 m-grid-12 m-orange pad-3-top colflex">
			<div class="col s-grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 s-grid-11 m-grid-10 s-pad-0-sides m-pad-0-sides pad-3-vert s-pad-0-top s-pad-1-bottom pad-3-left">
			<?php if( get_field('orange_callout_title') ): ?>	
			<h1><?php the_field('orange_callout_title'); ?></h1>
			<h3><?php the_field('orange_callout_text'); ?></h3>
			<?php endif; ?>
			</div>
			<div class="btn-wrapper pad-3-bottom s-pad-1-bottom l-grid-none">
				<a href="/fiscal-sponsorship/"><div class="btn">Learn more</div></a>	
			</div>
			<div class="col grid-1 s-grid-none">&nbsp;</div>
		</div>
	</div>

    <div class="row eccla_wrapper s-grid-none m-grid-none">
    	<div class="col grid-6 pad-3-bottom">

			<div class="col grid-2">&nbsp;</div>
			<div class="col grid-10 pad-3-right">
				
				<div class="btn-wrapper pad-3-bottom">
				<a href="/educational-resources/"><div class="btn">Learn more</div></a>	
				</div>
				
			</div>
		</div>	

		<div class="col grid-6 pad-3-bottom">
		
			<div class="col grid-10 pad-3-left">
				
				<div class="btn-wrapper pad-3-bottom">
				<a href="/fiscal-sponsorship/"><div class="btn">Learn more</div></a>	
				</div>
				
			</div>
			<div class="col grid-2">&nbsp;</div>
		</div>
	</div>

</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>			
		<div class="col grid-12 map">

		<div class="background">
			<div class="background-image background-left" style="background-image:url(http://eccla.codisattva.com/wp-content/uploads/2016/03/ECCLA_Website_MapAsset_sm.jpg)"></div>
			<div class="background-image background-middle" style="background-image:url(http://eccla.codisattva.com/wp-content/uploads/2016/03/ECCLA_Website_MapAsset_sm.jpg)"></div>
			<div class="background-image background-right" style="background-image:url(http://eccla.codisattva.com/wp-content/uploads/2016/03/ECCLA_Website_MapAsset_sm.jpg)"></div>

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

<div class="col grid-12 pad-3-bottom eccla_wrapper">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11"><h2 class="eccRed pad-3-top pad-2-bottom">News</h2>
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

<div class="grid-12 m-grid-11">
<h4 class="frontpagenewstitle pad-2-bottom">Subscribe to our newletter</h4>
<?php echo do_shortcode( '[salesforce form="2"]' ); ?>
</div>

</div>
</div>
		<div class="col grid-12 pad-3-vert s-pad-3-top s-pad-1-bottom grey1">
		<div class="eccla_wrapper">
		<div class="col grid-12">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10 pad-1-bottom"><h2 class="eccBlue">ECCLA on Facebook</h2></div>
			<div class="col grid-1half m-grid-1">&nbsp;</div>
		</div>
		<div class="col grid-12">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10">
				<?php echo do_shortcode('[custom-facebook-feed]'); ?>
			</div>
			<div class="col grid-1half m-grid-1">&nbsp;</div>
		</div>	
			<div class="col grid-12">
				<div class="btn-wrapper pad-3-top">
				<a href="https://www.facebook.com/ECCLAConnects/"><div class="bbtn">Connect</div></a>	
				</div>
			</div>
		</div>	
		</div> <!-- /.col.grid_12_of_12 -->
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
	</div><!-- /#primary.site-content.row -->
			<div class="col grey4 grid-12">
				<img src="http://eccla.codisattva.com/wp-content/uploads/2015/12/ECCLA_Website-PatternBar_121415-2.png"/>
			</div>
<?php get_footer(); ?>
