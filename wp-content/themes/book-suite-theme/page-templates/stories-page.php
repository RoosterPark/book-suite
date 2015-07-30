<?php
/**
 * Template Name: Stories Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>	
				<?php the_content(); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</section>
<!-- <section id="successNumbers" class="story-stats"> -->
<!-- 	<div class="container-fluid"> -->
<!-- 		<div class="row"> -->
<!-- 			<div class="col-md-3 col-lg-3 left-numbers"> -->
<!-- 				<div class="countries"> -->
<!-- 					<div class="inner-div"> -->
<!-- 						<div class="number-data">63</div> -->
<!-- 						<div class="number-title">Countries</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-md-6 col-lg-6 middle-numbers"> -->
<!-- 				<div class="row"> -->
<!-- 					<div class="col-md-12 daily-bookings"> -->
<!-- 						<div class="inner-div"> -->
<!-- 							<div class="number-title">Global Daily Bookings</div> -->
<!-- 							<div class="number-data">125k</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 					<div class="col-md-12 web-traffic"> -->
<!-- 						<div class="inner-div"> -->
<!-- 							<div class="number-data">+30%</div> -->
<!-- 							<div class="number-title">Avg. Website Traffic Increase</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-md-3 col-lg-3 right-numbers"> -->
<!-- 				<div class="visits"> -->
<!-- 					<div class="inner-div"> -->
<!-- 						<div class="number-title">Global Daily Visits</div> -->
<!-- 						<div class="number-data">63</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- </section> -->
<section id="successStories" class="success-stories">

<style>
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
	/* ---- grid ---- */
	
	.grid {
	  background: #DDD;
	  max-width: 1000px;
	  width: 100%;
	  float: left;
	}
	
	/* clear fix */
	.grid:after {
	  content: '';
	  display: block;
	  clear: both;
	}
	
	.grid-menu {
   		background-color: #54657e;
    	float: left;
    	max-width: 335px;
    	min-height: 300px;
    	width: 100%;
	}
	/* ---- .grid-item ---- */
	
	.grid-item {
	  float: left;
	  width: 250px;
	  height: 275px;
	  background: #0D8;
	  postition: relative;

	}
	
	.grid-item .inner-grid {
		background-color: #009a5f;
/* 		padding: 15px; */
		margin: 15px;
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		bottom: 0;
	}
	
	.grid-item-width2 { width: 220px; }
	.grid-item-height2 { 
		height: 300px;
		background-color: #00c67a;
	}
		
</style>

	<div class="container-fluid">
		<div class="grid">
			<div class="grid-item">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97160&w=220&h=160" />
					<h5>grid-item</h5>
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97185&w=220&h=185" />
					<h5>grid-item-height2</h5>
				</div>
			</div>
			<div class="grid-item">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97160&w=220&h=160" />
					<h5>grid-item</h5>				
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97185&w=220&h=185" />
					<h5>grid-item-height2</h5>
				</div>
			</div>
			<div class="grid-item">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97160&w=220&h=160" />
					<h5>grid-item</h5>				
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97185&w=220&h=185" />
					<h5>grid-item-height2</h5>				
				</div>
			</div>
			<div class="grid-item">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97160&w=220&h=160" />
					<h5>grid-item</h5>				
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97185&w=220&h=185" />
					<h5>grid-item-height2</h5>				
				</div>
			</div>
			<div class="grid-item">
				<div class="inner-grid">
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=220%C3%97160&w=220&h=160" />
					<h5>grid-item</h5>				
				</div>
			</div>
		</div>
		<div class="grid-menu">
			<div class="inner-grid-menu">
				<h5>Grid Filter Menu</h5>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
