<?php $catName =  get_cat_ID("solutions");	
            $args = array( 
                'post_type' => 'post',
                'posts_per_page' =>6,
                'orderby' => 'post_date',
                'order' => 'date' ,
                'cat' => $catName,
                //'category__and' => array( 5, 7 ),
                'post_status' => 'publish',
            );
          
            
            $my_query = new WP_Query($args);
            
            while($my_query->have_posts()) :
            	$my_query->the_post();
            ?>
		
        <div class="col-xs-4 col-sm-4 col-md-4">
        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
		<div class="section-title"><?php the_title(); ?></div>
		<?php the_content(); ?>		
		<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="btn-group" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
        </div>
       
			<?php endwhile; ?>			
<?php  wp_reset_postdata(); ?>