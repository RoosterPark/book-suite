<?php $my_query = new WP_Query('name=about-this-dev');
while($my_query->have_posts()){
        $my_query->the_post();
?>
<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <h1><?php the_title() ?></h1>
	        <?php the_content(); ?>
	        <p>
				<a class="btn btn-default" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">View details <i class="fa fa-angle-double-right"></i></a>
			</p>
			<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="btn-group" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
	    </div>
	</div>
</div>
<?php } ?>