<section id="index-request-demo" class="sub-section dark-grey request-demo">
<?php $my_query = new WP_Query('name=see-how-bookingsuite-can-accelerate-your-property');
while($my_query->have_posts()){
        $my_query->the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <h3><?php the_title() ?></h3>
	        <?php the_content(); ?>
<!-- 	        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
	        <p>
				<a class="btn btn-primary btn-lg" role="button" href="/request-a-demo/" title="Request a Demo">Request a Demo</a>
			</p>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
	    </div>
	</div>
</div>
</article>
<?php } ?>
</section>