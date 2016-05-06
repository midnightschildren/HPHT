<?php
/**
 * Template Name: Education Page Template
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content" role="main">

		<div class="col grid-12">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_12_of_12 -->

<div class="tagblock">
<div class="entry-content">
<div class="eccla_wrapper">	
<div class="col grid-12 pad-3-bottom">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11"><h2 class="eccGrey pad-3-top pad-2-bottom">Resources by Tag</h2>
<p class="tagtext"><?php
$args = array(
  'orderby' => 'name',
  'hide_empty' => 0,
  
  'order' => 'ASC'
  );
$categories = get_tags($args);
  foreach($categories as $category) { 
    echo '<span><a href="' . get_tag_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></span>';
      } 
?></p>
</div>
<div class="col grid-1half m-grid-1">&nbsp;</div>
</div>
</div>
</div>
</div>


<div class="col grid-12 pad-3-bottom eccla_wrapper">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11"><h2 class="eccRed pad-3-top pad-2-bottom"><?php the_field('potential_provider_title'); ?></h2>
<div class="col grid-2 s-grid-none m-grid-none">&nbsp;</div>
<div class="col grid-10 s-grid-12 m-grid-11">
	<div class="col grid-10 s-grid-12 m-grid-12">
	<?php while ( have_posts() ) : the_post(); ?>	
		<?php if( get_field('potential_provider_text') ): ?><?php the_field('potential_provider_text'); ?><?php endif; ?>
	<?php endwhile; // end of the loop. ?>
	</div>
</div>
</div>
</div>
<div class="col grid-12">
		<div class="btn-wrapper pad-3-vert s-pad-1-vert">
			<a href="/contact-us/"><div class="obtn">Contact Us</div></a>	
		</div>
</div>


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


		

</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
