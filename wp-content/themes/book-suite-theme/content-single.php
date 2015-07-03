<?php
/**
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-md-12">
			<?php if ( has_post_thumbnail() ) {  ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('success-stories-land-1024'); ?></a>
			<?php  } ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<header class="entry-header  page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');?>
			</header><!-- .entry-header -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<?php the_content(); ?>
			<footer class="entry-meta">
			<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'upbootwp' ) );			
			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'upbootwp' ) );
			if ( ! upbootwp_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '<p class="tags">This post was tagged:<br/>%2$s</p>', 'upbootwp' );
				} else {
					$meta_text = __( '<p>Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.</p>', 'upbootwp' );
				}
			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '<p>This entry was posted in:<br/>%1$s </p> <p class="tags">This post was tagged:<br/>%2$s</p >', 'upbootwp' );
			} else {
					$meta_text = __( '<p>This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.</p>', 'upbootwp' );
				}
			} // end check for categories on this blog
			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
			?>
			<?php upbootwp_posted_on(); ?>
			
			<?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),'after'  => '</div>',) ); ?>
	
			<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="btn btn-link edit-btn"><i class="fa fa-pencil-square-o"></i>', '</div>' ); ?>
			</footer><!-- .entry-meta -->	
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</article><!-- #post-## -->
