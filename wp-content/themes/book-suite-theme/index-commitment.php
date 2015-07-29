<section id="intro-commitment" class="sub-section solutions lt-blue">
	<div class="container-fluid">
		<div class="row">
		    <div class="col-sm-12 col-md-6 col-lg-6 link-cta text-left">
		    <?php $my_query = new WP_Query('name=commitment-to-partners');
			while($my_query->have_posts()){
			        $my_query->the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <header>
	        	<h1><?php the_title() ?></h1>
	        </header>
	        <?php the_content(); ?>
			<footer>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
			</footer>
			</article>
		    <?php } ?>
		   
		    </div>
		    <div class="col-sm-12 col-md-6 col-lg-6 link-cta text-left">
		        <?php $my_query = new WP_Query('name=privacy-promise');
			while($my_query->have_posts()){
			        $my_query->the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h1><?php the_title() ?></h1>
			</header>
			<?php the_content(); ?>
			<footer>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
			</footer>
			</article>
		     <?php } ?>	    </div>
		   
		</div>
	</div>
</section>