<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="col grid-12 about">

				<?php while ( have_posts() ) : the_post(); ?>

	<div class="entry-content">
		<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-vert top-content">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 pad-3-top m-grid-10">
				<h1 class="entry-title">News</h1>	
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
					<h2 class="eccRed pad-2-bottom"><?php the_title(); ?></h2>
					<div class="pad-2-vert"><?php the_content(); ?></div>
						
					<?php

					if(get_field('highlighted_resources'))
					{
						echo '<div class="highlighted-resources"><p style="padding-top: 24px">HIGHLIGHTED RESOURCES</p>' . get_field('highlighted_resources') . '</div>';
					}

					?>		  			   	
					
					

					<?php
					$previous_post = get_adjacent_post(false, '', true);
					$next_post = get_adjacent_post(false, '', false);
					?>
					<div id="nav-below-news">
					<?php if ($previous_post): // if there are older articles ?>
    					<div class="nav-previous">Previous: <a href="<?php echo make_href_root_relative(get_permalink($previous_post)); ?>"><?php echo get_the_title($previous_post); ?></a></div>
					<?php endif; ?>
					<?php if ($previous_post & $next_post): // if there are older articles ?>
						<div class="nav-middle">&nbsp;/&nbsp;</div>
					<?php endif; ?>
					<?php if ($next_post): // if there are newer articles ?>
    					<div class="nav-next">Next: <a href="<?php echo make_href_root_relative(get_permalink($next_post)); ?>"><?php echo get_the_title($next_post); ?></a></div>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

					

				<?php endwhile; // end of the loop. ?>

			</div> <!-- /.col.grid-12 -->
			

	</article> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
