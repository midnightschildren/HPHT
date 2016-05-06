<?php
/**
 * Template Name: Schools Served Template
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

		<?php while ( have_posts() ) : the_post(); ?>
					
				<?php get_template_part( 'content', 'page' ); ?>	

		</div> <!-- /.col.grid_12_of_12 -->


<div class="white-content">
<div class="eccla_wrapper">
<div class="col grid-12 pad-3-bottom">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11 m-grid-10"><h2 class="eccRed pad-3-top pad-2-bottom"></h2>
<div class="col grid-12 pad-3-bottom">
	
<?php 

$custom_query = new WP_Query(array('post_type' => 'schools')); // only Teacher Resource Post Type	

while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<?php 	
				$content = apply_filters( 'the_content', get_the_content() );
				$content = str_replace( ']]>', ']]&gt;', $content );
				$stitle = apply_filters( 'the_title', get_the_title() );
				$stitle = str_replace( ']]>', ']]&gt;', $stitle );
				$tag_id = '22';
				if (has_tag($tag_id)) {
				$stitle.= ' *';	
				}
				$titleurl = get_permalink ();
				$topdata = null;
				if (get_field("grades")) {
				$topdata .= '<p class=\'scholar\'><strong>Grades: </strong>';	
				$topdata .= get_field( "grades" );
				$topdata .= '</p>';
				}
				if (get_field("address")) {
				$topdata .= '<p class=\'scholar\'><strong>Address: </strong>';
				$topdata .=	get_field( "address" );
				$topdata .= '</p>';
				}
				
				$registration = get_field( "registration" );
				$location = get_field( "location" );
				$html = '<div class="post_tags">Posted: ';
				$html .= get_the_date();		
				$html .="&nbsp;&nbsp; <a href='{$titleurl}'><i class='fa fa-link'>Permalink</i></a>";				
				$html .= '</div>';
				$pimage = wp_get_attachment_url( get_post_thumbnail_id() );

				$t = '[toggle title= \'';
				$t.= $stitle;
				$t.= '<span class=\"tswitch\"></span>';
				$t.= '\']';
				$t.= $topdata;
				$t.= $registration;
				$t.= $location;
				$t.= '<div class=\'pad-2-vert\'>';
			   	$t.= $content;
			   	$t.= '</div>';
			   	$t.= '<img class=\'tripimg\' src=\'';
			   	$t.= $pimage;
			   	$t.= '\' />';			   	
			   	$t.= $html;
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

		<div class="col grid-12">

			<?php if( get_field('second_featured_image') ): ?>

                <figure class="fixedratiotop" style="background-image:url(<?php the_field('second_featured_image'); ?>)"></figure>
           
			<?php endif; ?>
		</div>

<?php endwhile; // end of the loop. ?>

</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
