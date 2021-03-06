<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="pad-2-vert">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<div class="featured-post">
				<?php esc_html_e( 'Featured post', 'quark' ); ?>
			</div>
		<?php } ?>
		<header class="entry-header">
			<?php if ( is_single() ) { ?>
				<h3 class="entry-title"><?php the_title(); ?></h3>
			<?php }
			else { ?>
				<h3 class="entry-title search-title">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h3>
			<?php } // is_single() ?>
			
			<?php if ( has_post_thumbnail() && !is_search() ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
					<?php the_post_thumbnail( 'post_feature_full_width' ); ?>
				</a>
			<?php } ?>
		</header> <!-- /.entry-header -->

		<?php if ( is_search() ) { // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
			<div class="post_tags">Posted: <?php echo get_the_date(); ?> </div><!-- /.entry-summary -->
		<?php }
		else { ?>
			<div class="entry-content">
				<?php the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'quark' ), array( 'span' => array( 
					'class' => array() ) ) )
					); ?>
				<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'quark' ),
					'after' => '</div>',
					'link_before' => '<span class="page-numbers">',
					'link_after' => '</span>'
				) ); ?>
			</div> <!-- /.entry-content -->
		<?php } ?>

	</div>	
	</article> <!-- /#post -->
