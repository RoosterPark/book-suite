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

<div class="container-fluid">
<h1>Isotope - packery layout mode w= 1024px</h1>
		<div class="grid">
			<div class="gutter-sizer"></div>
			<div class="grid-item">
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x200-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<div class="featured"><span>Read the Case Study!</span></div>
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item">
				<div class="featured"><span>Read the Case Study!</span></div>
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x180-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x200-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x360-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item">
				<div class="featured"><span>Read the Case Study!</span></div>
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x150-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<div class="featured"><span>Read the Case Study!</span></div>
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x360-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item grid-item-height2">
				<div class="featured"><span>Read the Case Study!</span></div>
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
				<div class="inner-grid">
					<p class="title"><strong>Tile Tittle</strong></p>
					<p class="location">Thessaloniki, Greece</p>
					<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
					<ul class="tag-list">
						<li>Tags:</li>
						<li><a rel="tag" href="#">Europe</a>,</li>
						<li><a rel="tag" href="#">hotel</a>,</li>
						<li><a rel="tag" href="#">luxury</a>,</li>
						<li><a rel="tag" href="#">urban </a>,</li>
					</ul>		
				</div>
			</div>
		</div>
		<div class="grid-menu">
			<div class="inner-grid-menu">
				<h5>Grid Filter Menu w = 312px</h5>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
