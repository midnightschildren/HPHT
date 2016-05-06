<?php
/**
 * The template for displaying an archive page for Tags.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); 
$posts=query_posts($query_string . '&orderby=title&order=asc');
?>

	<div id="primary" class="site-content row" role="main">

	<div class="col grid-12">

		<?php if ( have_posts() ) : ?>

	<div class="entry-content">
		<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-vert top-content">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10">
			<h1 class="entry-title eccRed"><?php printf( esc_html__( 'Resources tagged %s', 'quark' ), '<span>"' . single_tag_title( '', false ) . '"</span>' ); ?></h1>
			</div>
			<div class="col grid-1half m-grid-1">&nbsp;</div>
		</div>
		</div>
	</div>

	<div class="white-content">
	<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-bottom">
		<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10"><h2 class="eccRed pad-3-top pad-2-bottom"></h2>
			<div class="col grid-12 pad-3-bottom">
	
<?php while ( have_posts() ) : the_post(); ?>

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
				$html .="&nbsp;&nbsp; </span><a href='{$titleurl}'><i class='fa fa-link'>Permalink</i></a>";				
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

				<?php else : ?>

					<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

				<?php endif; // end have_posts() check ?>

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

			</div> <!-- /.col.grid_12_of_12 -->
			

	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
