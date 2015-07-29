<?php $catName =  get_cat_ID("solutions");	
            $args = array( 
                'post_type' => 'post',
                'posts_per_page' =>-1,
                'cat' => $catName,
                'meta_key'          => 'solutions_rank',
                'orderby'           => 'meta_value_num',
                'order'             => 'ASC',
                'post_status' => 'publish',
            );
          
            
            $my_query = new WP_Query($args);
            
            while($my_query->have_posts()) :
            	$my_query->the_post();
            ?>
		
        <div class="col-xs-4 col-sm-4 col-md-4">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
			<div class="h3"><?php the_title(); ?></div>
			<?php if(! is_page('solutions')) {
				the_content();
			}
			?>	
		<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
        </article>
        </div>
       
			<?php endwhile; ?>			
<?php  wp_reset_postdata(); ?>