<?php
/**
 * Template Name: Fiscal Sponsorhip Page Template
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

<div class="white-content">
<div class="eccla_wrapper">
<div class="col grid-12 pad-3-bottom">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11 m-grid-10"><h2 class="eccRed pad-3-top pad-2-bottom">Frequently Asked Questions</h2>
<div class="col grid-12 pad-3-bottom">
	
<?php $custom_query = new WP_Query(array('post_type' => 'fiscalfaq')); // only FAQ Post Type
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<?php 	
				$content = apply_filters( 'the_content', get_the_content() );
				$content = str_replace( ']]>', ']]&gt;', $content );
				$stitle = apply_filters( 'the_title', get_the_title() );
				$stitle = str_replace( ']]>', ']]&gt;', $stitle );
				$t = '[toggle title= \'<div class=\"grid-11\">';
				$t.= $stitle;
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

<div class="grey-content">
<div class="eccla_wrapper">	
<div class="col grid-12">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11"><h2 class="eccOrange pad-3-top pad-2-bottom"><?php the_field('checklist_title'); ?></h2>
<div class="col grid-2 s-grid-none m-grid-none">&nbsp;</div>
<div class="col grid-10 s-grid-12 m-grid-11">
	<div class="col grid-10 s-grid-12 m-grid-12">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php if( get_field('checklist_text') ): ?>	
		<?php the_field('checklist_text'); ?>
		<?php endif; ?>
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
</div>
</div>

		


		

</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
