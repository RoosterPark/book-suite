<?php $my_query = new WP_Query('name=welcome');
while($my_query->have_posts()){
        $my_query->the_post();
?>
<div class="container-fluid">
	<div class="row">
	    <div id="home-tag-cloud" class="col-md-4">
	       <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
	        
	        <h2>Popular Tags</h2>
	        <ul class="mp-tags">
	        <li><?php wp_tag_cloud( 'smallest=8&largest=22' ); ?></li>
	        </ul>
	        <?php endif; ?>
	    </div>
	    <div class="col-md-8">
	        <header class="page-header">
	       		<h1><?php the_title() ?></h1>
	        </header>
	        <?php if(function_exists('the_subtitle')) { ?>
	        <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
	        <?php } ?> 
	        <?php the_content(); ?>
	        <p>
				<a class="btn btn-default" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">View details <i class="fa fa-angle-double-right"></i></a>
			</p>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
	    </div>
	</div>
</div>
<?php   } ?>