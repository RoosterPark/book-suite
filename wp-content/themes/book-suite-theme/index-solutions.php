<?php $catName =  get_cat_ID("solutions");	
			$argsd = array(
					'post_type' 		=> 'post',
					'posts_per_page' 	=>-1,
					'cat' 				=> $catName,
					'meta_key'      	=> 'solutions_rank',
					'orderby'           => 'meta_value_num',
					'order'             => 'ASC',
					'post_status' 		=> 'publish',
			);
			$my_posts = get_posts($argsd);
			foreach($my_posts as $p) { ?>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<article id="post-<?php echo $p->ID; ?>" <?php if(is_page('solutions')) { echo 'class="jumpTo"';} ?>>
						<?php
						$str = $p->post_name;
						$post_name = implode('-', array_map('ucfirst', explode('-', $str)));
						?>
				        <a href="<?php echo '#'.$post_name; ?>"><?php echo get_the_post_thumbnail($p->ID,'homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
						<div class="h3"><?php echo $p->post_title; ?></div>
						<?php if(! is_page('solutions')) {
						echo $p->post_content;
						}
						?>	
						<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
					</article>
				</div>
			<?php }
// 			echo '<pre>';
// 			print_r($my_posts);
// 			echo '</pre>';
			?>		
<?php  wp_reset_postdata(); ?>	