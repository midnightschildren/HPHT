<?php
/**
 * Template Name: News Page Template
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content" role="main">

		<div class="col grid-12 about">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page-a' ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_12_of_12 -->

<div class="white-content">
<div class="eccla_wrapper">
<div class="col grid-12">
<div class="col grid-1half m-grid-1">&nbsp;</div>
<div class="col grid-11 m-grid-10">
<div class="col grid-12 pad-3-bottom">
<div class="col grid-2 s-grid-none m-grid-none">&nbsp;</div>
<div class="col grid-10 s-grid-12 m-grid-11">
<div class="col grid-10 s-grid-12 m-grid-12">	
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$custom_query = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 1, 'paged' => $paged )); // only FAQ Post Type
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<h2 class="eccRed pad-3-top pad-2-bottom"><?php the_title(); ?></h2>
		<div class="news-post-content">
		<?php the_content(); ?>
		</div>
		<?php

		if(get_field('highlighted_resources'))
		{
			echo '<div class="highlighted-resources"><p style="padding-top: 24px">HIGHLIGHTED RESOURCES</p>' . get_field('highlighted_resources') . '</div>';
		}

		?>

	</div>

<?php endwhile; ?>
<?php $prev_post = get_adjacent_post(false, '', true);
if($custom_query->max_num_pages>1){?>
    <p class="navrechts">
    <?php
      if ($paged > 1) { ?>
        <a href="<?php echo '?paged=' . ($paged -1); //prev link ?>"><?php echo $prev_post->post_title ?></a>
                        <?php }
    for($i=1;$i<=$custom_query->max_num_pages;$i++){?>
        <a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php the_title(); ?></a>
        <?php
    }
    if($paged < $custom_query->max_num_pages){?>
        <a href="<?php echo '?paged=' . ($paged + 1); //next link ?>">></a>
    <?php } ?>
    </p>
<?php } ?>

<?php
previous_posts_link('&laquo; Newer',  $custom_query ->max_num_pages);
next_posts_link('Older &raquo;', $custom_query ->max_num_pages);
?>


<?php wp_reset_postdata(); // reset the query ?>
</div>
</div>
</div>
</div>
</div>



</div>
</div>






		

</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
