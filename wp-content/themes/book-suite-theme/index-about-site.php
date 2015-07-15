<?php $my_query = new WP_Query('name=about-this-site');
while($my_query->have_posts()){
        $my_query->the_post();
?>
<div class="container-fluid">
	<div class="row">
	    <div class="col-md-6">
	        <h1><?php the_title() ?></h1>
	        <?php the_content(); ?>
	        <p>
				<a class="btn btn-default" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">View details <i class="fa fa-angle-double-right"></i></a>
			</p>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
	    </div>
	    <div class="col-md-6">
	        <h1><?php the_title() ?></h1>
	        <?php the_content(); ?>
	        <p>
				<a class="btn btn-default" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">View details <i class="fa fa-angle-double-right"></i></a>
			</p>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
	    </div>
	</div>
</div>
<?php } ?>