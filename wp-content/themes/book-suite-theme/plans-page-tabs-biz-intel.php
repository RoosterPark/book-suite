<!-- Plans Page Biz Intel Tab Content -->
<?php 
global $lang_par;
if ($_GET['lang']) {
 	$lang_par = "?lang=".$_GET['lang'];
}
?>
<section class="sub-section prod-features white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1><?php echo $cbtn_text = _e( 'Revenue Management', 'upbootwp' );?></h1>
			</div>	
		</div>
		<div class="row">
			
				<?php	
	            $args = array( 
	                'name' => 'ratecast-post'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('bizIntel'); ?>>
				<div class="col-xs-2 col-sm-1 col-md-2 col-lg-2">
				<?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				</div>
				<div class="col-xs-10 col-sm-7 col-md-6 col-lg-6">
					<header class="page-header"><h1 class="text-left"><?php the_title(); ?></h1></header>
					<?php the_content(); ?>		
					<?php  $ebtn_text =  __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' );?>	
					<?php edit_post_link($ebtn_text,'<p>','</p>' ); ?>
				</div>
				<?php endwhile; ?>	
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
					<p><a class="btn btn-info btn-lg" role="button" href="/ratemanager<?php echo $lang_par;?>" title="<?php echo $btn_text = _e( 'Learn More', 'upbootwp' );?>"><?php echo $btn_text = _e( 'Learn More', 'upbootwp' );?></a></p>
				</div>	
				</article>	
				<?php  wp_reset_postdata(); ?>
       		
		</div>
	</div>
</section>
<section id="productDesign" class="sub-section prod-features  gry">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1><?php echo $cbtn_text = _e( 'Not Sure Which Plan is Right for Your Property?', 'upbootwp' );?></h1>
			</div>	
		</div>

		<div class="row">
	    	<div class="col-md-12 text-center">
	        	<div class="bgroup"><a class="btn btn-default btn-lg" role="button" href="/product-features/<?php echo $lang_par;?>" title="<?php echo $btn_text = _e( 'See All Features', 'upbootwp' );?>"><?php echo $btn_text = _e( 'See All Features', 'upbootwp' );?></a></div>
	    	</div>
		</div>
	</div>
</section>