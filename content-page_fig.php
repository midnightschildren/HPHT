<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col grid-12">

<?php if ( has_post_thumbnail() ) {
		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                echo '<figure class="fixedratiotop" style="background-image:url('.$feat_image_url.');"></figure>';
           }?>


</div>


	<div class="entry-content">
		<div class="eccla_wrapper">
		<div class="col grid-12 pad-3-vert top-content">
			<div class="col grid-1half m-grid-1">&nbsp;</div>
			<div class="col grid-11 m-grid-10">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			</div>
			<div class="col grid-1half m-grid-1">&nbsp;</div>
		</div>
		</div>
	</div><!-- /.entry-content -->

</article><!-- /#post -->
