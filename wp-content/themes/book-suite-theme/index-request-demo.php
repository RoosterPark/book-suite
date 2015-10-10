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
	        <div>
				<a class="btn btn-primary btn-lg" role="button" href="http://info.suite.booking.com/free-consultation/en-us" target="_blank" title="<?php  echo $btn_text =  _e( 'Free Consultation', 'upbootwp' );?>"><?php  echo $btn_text =  _e( 'Free Consultation', 'upbootwp' );?></a>
			</div>
			<?php  
			$ebtn_text =  __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' );
			edit_post_link($ebtn_text,'<p>','</p>' );
			?>
	    </div>
	</div>
</div>
</article>
<?php } ?>
</section>