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
			
				
				if ( is_page('plans')) { ?>
					<div class="jumpToWrapper">
					<?php foreach($my_posts as $p) { 
						if ( ($p->post_name !== 'premium-services' ) && is_page('plans')) { 
						$str = $p->post_name; 
						?>
							<div id="post-<?php echo $p->ID; ?>" <?php if(is_page('solutions') || is_page('plans')) { echo 'class="jumpTo"';} ?>>
								<?php
								$post_name = implode('-', array_map('ucfirst', explode('-', $str)));
								?>
						        <a href="<?php echo '#'.$post_name; ?>"><?php echo get_the_post_thumbnail($p->ID,'homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
								<div class="h3 text-center">
									<?php if(is_page('solutions') || is_page('plans')) { ?>
										<a href="<?php echo '#'.$post_name; ?>"><?php echo $p->post_title; ?></a>
									<?php } else { ?>
										<?php echo $p->post_title; ?>
									<?php }?>
								</div>
								<?php if(!is_page('solutions') && !is_page('plans')) {
									echo $p->post_content;
								}
								?>	
								<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="edit">', '</div>' , $p->ID); ?>
							</div>
							<?php } ?>
					<?php } ?>	
					</div>			
				<?php } ?>
				<?php if ( is_page('solutions')) { ?>
					<?php foreach($my_posts as $p) { 
					$str = $p->post_name; 
					?>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<article id="post-<?php echo $p->ID; ?>" <?php if(is_page('solutions') || is_page('plans')) { echo 'class="jumpTo"';} ?>>
							<?php
							$post_name = implode('-', array_map('ucfirst', explode('-', $str)));
							?>
					        <a href="<?php echo '#'.$post_name; ?>"><?php echo get_the_post_thumbnail($p->ID,'homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
							<div class="h3">
								<?php if(is_page('solutions') || is_page('plans')) { ?>
									<a href="<?php echo '#'.$post_name; ?>"><?php echo $p->post_title; ?></a>
								<?php } else { ?>
									<?php echo $p->post_title; ?>
								<?php }?>
							</div>
							<?php if(!is_page('solutions')) {
								echo $p->post_content;
							}
							?>	
							<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="edit">', '</div>' , $p->ID); ?>
						</article>
					</div>	
					<?php } ?>			
				<?php } ?>
				<?php if ( is_home()) { ?>
					<?php foreach($my_posts as $p) { 
					$str = $p->post_name; 
					?>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<article id="post-<?php echo $p->ID; ?>" <?php if(is_page('solutions') || is_page('plans')) { echo 'class="jumpTo"';} ?>>
							<?php
							$post_name = implode('-', array_map('ucfirst', explode('-', $str)));
							?>
					        <a href="<?php echo '#'.$post_name; ?>"><?php echo get_the_post_thumbnail($p->ID,'homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
							<div class="h3">
								<?php echo $p->post_title; ?>
							</div>
							<?php if(is_home()) {
								echo $p->post_content;
							}
							?>	
							<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="edit">', '</div>' , $p->ID); ?>
						</article>
					</div>	
					<?php } ?>	
				<?php } ?>					
<?php  wp_reset_postdata(); ?>	