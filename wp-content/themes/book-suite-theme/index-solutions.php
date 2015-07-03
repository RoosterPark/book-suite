
<div class="container-fluid">
	<div class="row">
	    
<?php $catName =  get_cat_ID("solutions");
        
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
             
            $args = array( 
                'post_type' => 'post',
                'posts_per_page' =>6,
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'date' ,
                'cat' => $catName,
                //'category__and' => array( 5, 7 ),
                'post_status' => 'publish',
            );
            $wp_query = new WP_Query($args);
            
            while ( have_posts() ) : the_post(); ?>
		
        <div class="col-xs-4 col-sm-4 col-md-4">
        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
			<div class="section-title"><?php the_title(); ?></div>
			<?php the_content(); ?>		
			<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="btn-group" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
        </div>
<?php endwhile; ?>			

	</div>
	<div class="row">
		<div class="col-md-12 cta-link">
			<a class="btn btn-info btn-lg" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">View Our Solutions</a>		
		</div>
	</div>
</div>
