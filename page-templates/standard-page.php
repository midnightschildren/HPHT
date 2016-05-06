<?php
/**
 * Template Name: Standard Page Layout
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content" role="main">

		<div class="<?php the_title(); ?> col grid-12">

		<?php while ( have_posts() ) : the_post(); ?>
					
				<?php get_template_part( 'content', 'page' ); ?>	

		</div> <!-- /.col.grid_12_of_12 -->




<div class="col grid-12">
<?php if( get_field('standard_text') ): ?>	
<div class="white-content pad-3-bottom s-pad-1-bottom">	
<div class="eccla_wrapper">	
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11">
	
	
	
<div class="col grid-2 s-grid-none m-grid-none">&nbsp;</div>
<div class="col grid-10 s-grid-12 m-grid-11">
	<div class="col grid-10 s-grid-12 m-grid-12">
		<div class="standard_1 pad-3-top">	
		<?php if( get_field('standard_title') ): ?><h2 class="eccRed pad-2-bottom"><?php the_field('standard_title'); ?></h2><?php endif; ?>	
		<div class="pad-3-bottom"><?php the_field('standard_text'); ?></div>
		</div>


	</div>
</div>
<?php if (get_field('special_form_field') ): ?><div class="pad-3-bottom s-pad-0-bottom"><?php the_field('special_form_field'); ?></div><?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
</div>

		<div class="col grid-12">

			<?php if( get_field('second_featured_image') ): ?>


				<div class="background"><div class="background-image background-left" style="background-image:url(<?php the_field('second_featured_image'); ?>)"></div><div class="background-image background-middle" style="background-image:url(<?php the_field('second_featured_image'); ?>)"></div><div class="background-image background-right" style="background-image:url(<?php the_field('second_featured_image'); ?>)"></div></div>
                
           
			<?php endif; ?>
		</div>

<?php endwhile; // end of the loop. ?>

</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
