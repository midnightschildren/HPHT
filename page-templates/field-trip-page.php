<?php
/**
 * Template Name: Database Sections Template
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
if (is_page(86)) {
$custom_query = new WP_Query(array('post_type' => 'trip')); // only Field Trip Post Type
}
if (is_page(293)) {
$custom_query = new WP_Query(array('post_type' => 'classroom')); // only Classroom & At Home Post Type	
}
if (is_page(295)) {
$custom_query = new WP_Query(array('post_type' => 'opportunities')); // only Student Opportunity Post Type	
}
if (is_page(297)) {
$custom_query = new WP_Query(array('post_type' => 'resource')); // only Teacher Resource Post Type	
}
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
				$pimagehtml = null;
				$topdata = null;
				if (get_field("admission")) {
				$topdata .= '<p class=\'scholar\'><strong>Admission: </strong>';	
				$topdata .= get_field( "admission" );
				$topdata .= '</p>';
				}
				if (get_field("scholarships")) {
				$topdata .= '<p class=\'scholar\'><strong>Bus Scholarships: </strong>';
				$topdata .=	get_field( "scholarships" );
				$topdata .= '</p>';
				}
				
				$registration = get_field( "registration" );
				$location = get_field( "location" );
				$tags = get_the_tags();
				$html = '<div class="post_tags"><span class="s-date">Posted: ';
				$html .= get_the_date();
				$html .= '&nbsp;&nbsp;&nbsp; </span><span class="s-date">Tags: ';
				foreach ( $tags as $tag ) {
					$tag_link = get_tag_link( $tag->term_id );			
					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
					$html .= "{$tag->name}</a>, ";
						}
				$html = substr($html, 0, -2);		
				$html .="&nbsp;&nbsp; </span><a href='{$titleurl}'><i class='fa fa-link'></i>Permalink</a>";				
				$html .= '</div>';
				if (get_post_thumbnail_id()){
				$pimage = wp_get_attachment_url( get_post_thumbnail_id() );
				$pimagehtml = '<img class="tripimg" src="';
				$pimagehtml .=$pimage;
				$pimagehtml .='" />';
				}
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
			   	$t.= $pimagehtml;			   				   	
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
