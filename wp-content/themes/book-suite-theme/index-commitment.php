
<div class="container-fluid">
	<div class="row">
	    <div class="col-sm-6 col-md-6">
	    <?php $my_query = new WP_Query('name=commitment-to-partners');
		while($my_query->have_posts()){
		        $my_query->the_post();
		?>
        <header>
        	<h1><?php the_title() ?></h1>
        </header>
        <?php the_content(); ?>
		<footer>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
		</footer>
	    <?php } ?>
	   
	    </div>
	    <div class="col-sm-6 col-md-6">
	        <?php $my_query = new WP_Query('name=privacy-promise');
		while($my_query->have_posts()){
		        $my_query->the_post();
		?>
		<header>
			<h1><?php the_title() ?></h1>
		</header>
		<?php the_content(); ?>
		<footer>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
		</footer>
	     <?php } ?>	    </div>
	   
	</div>
</div>
