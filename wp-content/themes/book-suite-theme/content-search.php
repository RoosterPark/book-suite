<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-responsive' ) ); ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php if ( 'post' == get_post_type() ) : ?>
		<footer class="entry-footer">
			<?php upbootwp_posted_on_date(); ?>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
		</footer><!-- .entry-footer -->

	<?php else : ?>

		<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>

	<?php endif; ?>

</article><!-- #post-## -->
