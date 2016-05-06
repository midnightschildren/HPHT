<?php
/**
 * Template Name: Basic Education Section Template
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

<div class="tagblock">
<div class="entry-content">
<div class="eccla_wrapper">	
<div class="col grid-12 pad-3-bottom">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11"><h2>&nbsp;</h2>
<p class="tagtext">
<?php if( get_field('program_1_title') ): ?><span><a class="anchor" href="#program_1"><?php the_field('program_1_title'); ?></a></span><?php endif; ?>
<?php if( get_field('program_2_title') ): ?><span><a class="anchor" href="#program_2"><?php the_field('program_2_title'); ?></a></span><?php endif; ?>
<?php if( get_field('program_3_title') ): ?><span><a class="anchor" href="#program_3"><?php the_field('program_3_title'); ?></a></span><?php endif; ?>
</p>
</div>
<div class="col grid-1half m-grid-1">&nbsp;</div>
</div>
</div>
</div>
</div>


<div class="col grid-12">
<?php if( get_field('program_1_text') ): ?>	
<div class="white-content pad-3-bottom">	
<div class="eccla_wrapper">	
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11">
	
	
	
<div class="col grid-2 s-grid-none m-grid-none">&nbsp;</div>
<div class="col grid-10 s-grid-12 m-grid-11">
	<div class="col grid-10 s-grid-12 m-grid-12">
		<div class="program_1">	
		<h2 id="program_1" name="program_1" class="eccRed pad-3-top pad-2-bottom"><?php if( get_field('program_1_title') ): ?><?php the_field('program_1_title'); ?><?php endif; ?></h2>	
		<div class="pad-3-bottom"><?php the_field('program_1_text'); ?></div>
		</div>
		<div class="program_2">	
		<h2 id="program_2" name="program_2" class="eccRed pad-3-top pad-2-bottom"><?php if( get_field('program_2_title') ): ?><?php the_field('program_2_title'); ?><?php endif; ?></h2>	
		<div class="pad-3-bottom"><?php the_field('program_2_text'); ?></div>
		</div>
		<div class="program_3">	
		<h2 id="program_3" name="program_3" class="eccRed pad-3-top pad-2-bottom"><?php if( get_field('program_3_title') ): ?><?php the_field('program_3_title'); ?><?php endif; ?></h2>	
		<div class="pad-3-bottom"><?php the_field('program_3_text'); ?></div>
		</div>

	</div>
</div>
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
