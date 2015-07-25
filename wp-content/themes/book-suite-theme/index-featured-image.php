<?php	
            $args = array( 
                'name' => 'home-page-hero-banner'
            );
            $my_mob_query = new WP_Query($args);
            while($my_mob_query->have_posts()) :
            	$my_mob_query->the_post();
            ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<header id="masthead" class="site-hero" role="banner">
	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid">
			
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>

				<div class="jumbo-btn-group">
				<a class="btn btn-primary btn-lg" href="/request-a-demo/" role="button">Request A Demo</a>
				</div>
		</div>
	</div>
</header>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
<!-- #masthead -->