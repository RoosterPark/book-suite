<?php $my_query = new WP_Query('name=see-how-bookingsuite-can-accelerate-your-property');
while($my_query->have_posts()){
        $my_query->the_post();
?>
<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <h3><?php the_title() ?></h3>
	        <?php the_content(); ?>
<!-- 	        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
	        <p>
				<a class="btn btn-primary btn-lg" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Request a Demo</a>
			</p>
			<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="btn-group" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
	    </div>
	</div>
</div>
<?php } ?>