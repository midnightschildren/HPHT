<?php
/**
 * Template Name: Map Page Layout
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content" role="main">

		<div class="<?php the_title(); ?> col row grey4 grid-12">

		<?php while ( have_posts() ) : the_post(); ?>
					
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="col grid-12">

				<?php if ( has_post_thumbnail() ) {
					$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                echo '<div class="background"><div class="background-image background-left" style="background-image:url('.$feat_image_url.')"></div><div class="background-image background-middle" style="background-image:url('.$feat_image_url.')"></div><div class="background-image background-right" style="background-image:url('.$feat_image_url.')"></div></div>';
          		 }?>
				<div style="clear: both"></div>

				</div>


				<div class="entry-content">
					<div class="eccla_wrapper">
			<div class="col grid-12 pad-3-top pad-1-bottom top-content">
					<div class="col grid-1half m-grid-1">&nbsp;</div>
					<div class="col grid-11 m-grid-10">
						<h1 class="entry-title pad-1-top" style="margin-bottom: .5rem;"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					</div>
					<div class="col grid-1half m-grid-1">&nbsp;</div>
			</div>
					</div>
				</div><!-- /.entry-content -->

</article>	

		</div> <!-- /.col.grid_12_of_12 -->




<div class="col row grey4 grid-12">

<div class="pad-3-bottom">	


	
<div class="eccla_wrapper">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11 map_list">
<select id="SelectList">	
<option value="all" id="3">View All</option>
<option value="trip" id="4">Field Trips</option>
<option value="classroom" id="6">Classroom Programs</option>
<option value="resource" id="7">Teacher Resources</option>
<option value="schools" id="5">Schools Served</option>
</select>
</div>
</div>
</div>
<div class="col grid-12 m-grid-11 s-grid-11">
<?php 
				$mapposts = new WP_Query( array( 
									 
									'post_type' => 'trip' 
									) );

				
			?>
			
		<div class="acf-map">

			<?php while ( $mapposts->have_posts() ) : $mapposts->the_post(); ?>
			<?php
					$location = get_field('google_map');

			?>

				<div class="marker field_trip_symbol" data-cat="trip" data-symb="http://eccla.codisattva.com/wp-content/uploads/2016/02/ellipse-red.png" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				<h4>Field Trip: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?php echo $location['address']; ?></p>
					
				</div>
						
			<?php endwhile; ?>

			<?php wp_reset_query();  // Restore global post data stomped by the_post(). 

			$mapposts2 = new WP_Query( array( 
									 
									'post_type' => 'classroom' 
									) );

			?>

			<?php while ( $mapposts2->have_posts() ) : $mapposts2->the_post(); ?>
			<?php
					$location2 = get_field('google_map');

			?>

				<div class="marker classroom_symbol" data-cat="classroom" data-symb="http://eccla.codisattva.com/wp-content/uploads/2016/02/ellipse-red.png" data-lat="<?php echo $location2['lat']; ?>" data-lng="<?php echo $location2['lng']; ?>">
				<h4>Classroom Program: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?php echo $location2['address']; ?></p>
					
				</div>
						
			<?php endwhile; ?>

			<?php wp_reset_query();  // Restore global post data stomped by the_post(). 

			$mapposts3 = new WP_Query( array( 
									 
									'post_type' => 'resource' 
									) );

			?>

			<?php while ( $mapposts3->have_posts() ) : $mapposts3->the_post(); ?>
			<?php
					$location3 = get_field('google_map');

			?>

				<div class="marker resource_symbol" data-cat="resource" data-symb="http://eccla.codisattva.com/wp-content/uploads/2016/02/ellipse-red.png" data-lat="<?php echo $location3['lat']; ?>" data-lng="<?php echo $location3['lng']; ?>">
				<h4>Teacher Resource: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?php echo $location3['address']; ?></p>
					
				</div>
						
			<?php endwhile; ?>
			
			<?php wp_reset_query();  // Restore global post data stomped by the_post(). 

			$mapposts4 = new WP_Query( array( 
									 
									'post_type' => 'schools' 
									) );

			?>

			<?php while ( $mapposts4->have_posts() ) : $mapposts4->the_post(); ?>
			<?php
					$location4 = get_field('google_map');

			?>

				<div class="marker school_symbol" data-cat="schools" data-symb="http://eccla.codisattva.com/wp-content/uploads/2016/02/ellipse-grey2.png" data-lat="<?php echo $location4['lat']; ?>" data-lng="<?php echo $location4['lng']; ?>">
				<h4>School: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?php echo $location4['address']; ?></p>
					
				</div>
						
			<?php endwhile; ?>

		</div><!-- .acf-map -->
	
 
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

</div>

</div>

</div>



<?php endwhile; // end of the loop. ?>

</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
