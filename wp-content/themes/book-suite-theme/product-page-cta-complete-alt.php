
			<div class="col-sm-12 col-md-6 col-lg-6 link-cta left-cta border">
				<?php	
	            $args = array( 
	                'name' => 'web-direct-post'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php //the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<?php the_content(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				<?php if(is_page('webcomplete')) {?>
					<footer class="post-footer">
						<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webdirect/<?php echo $lang_par;?>" role="button" title="<?php echo $btn_text = _e( 'Learn More', 'upbootwp' );?>"><?php echo $btn_text = _e( 'Learn More', 'upbootwp' );?></a>
						
					</footer>
				<?php }?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
       		<div class="col-sm-12 col-md-6 col-lg-6 link-cta right-cta border">
				<?php	
	            $args = array( 
	                'name' => 'web-complete-post'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	            <?php //the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<?php the_content(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				<?php if(is_page('webdirect')) {?>
					<footer class="post-footer">
						<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webcomplete/<?php echo $lang_par;?>" role="button" title="<?php echo $btn_text = _e( 'Learn More', 'upbootwp' );?>"><?php echo $btn_text = _e( 'Learn More', 'upbootwp' );?></a>
						
					</footer>
				<?php }?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>	    