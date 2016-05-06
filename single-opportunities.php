<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="col grid-12">

				<?php while ( have_posts() ) : the_post(); ?>

	<div class="entry-content">
		<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-vert top-content">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 pad-3-top m-grid-10">
				<h4>Student Opportunities</h4>	
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
			<div class="col grid-1half m-grid-1">&nbsp;</div>
		</div>
		</div>
	</div>

	<div class="col grid-12 eccla_wrapper">
		<div class="col grid-1half m-grid-1">&nbsp;</div>
		<div class="col pad-3-vert grid-11">
			<div class="col grid-2 s-grid-none m-grid-none">&nbsp;</div>
			<div class="col pad-3-vert grid-10 s-grid-12 m-grid-11">
				<div class="col grid-10 s-grid-12 m-grid-12">
					
					<div class="pad-2-vert"><?php the_content(); ?></div>
					<?php 
					if (get_post_thumbnail_id()){
					$pimage = wp_get_attachment_url( get_post_thumbnail_id() ); 
					$pimagehtml = '<img class="tripimg" src="';
					$pimagehtml .= $pimage;
					$pimagehtml .= '" />';
					}?>
					
					<?php echo $pimagehtml; ?>				  			   	
					
					<?php
						$tags = get_the_tags();
						$html = '<div class="post_tags">Posted: ';
						$html .= get_the_date();
						$html .= '&nbsp;&nbsp;&nbsp; Tags: ';
						foreach ( $tags as $tag ) {
						$tag_link = get_tag_link( $tag->term_id );			
						$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
						$html .= "{$tag->name}</a>, ";
						}
						$html = substr($html, 0, -2);		
						$html .= '</div>'; 
						echo $html; ?>
				</div>
			</div>
		</div>
	</div>

					

				<?php endwhile; // end of the loop. ?>

			</div> <!-- /.col.grid-12 -->
			

	</article> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
