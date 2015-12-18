<?php
/**
 * Template Name: Property Website Plans Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid">
				<h1 class="page-title"><?php the_title(); ?></h1>	
				<?php the_content(); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
		</div>
	</div>
	</article>
	<?php endwhile; // end of the loop. ?>
</section>
<section id="dataBasedRate" class="sub-section white-alt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 compare-plans">
				<section class="text-center"> 
					<header>
						<h2>WebEngine</h2>
						<img class="icon svg" src="/wp-content/uploads/2015/07/greatwall.svg" />
						<p class="summary text-left">Praesent nec gravida ante. Mauris arcu tortor, iaculis ac venenatis id, porta in lorem. Fusce quis molestie orci, sit amet sodales purus.</p>
					</header>
					<ul class="options">
						<li class="opt-items">
							<h3>title</h3>
							<p>Ut turpis lorem</p>
						</li>
						<li class="opt-items">
							<h3>title</h3>
							<p>Ut turpis lorem</p>
						</li>
						<li class="opt-items">
							<h3>Mobile-friendly design</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>
						<li class="opt-items">
							<h3>Translation Support</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>					
					</ul>
					<footer>
						<a class="btn btn-primary btn-lg btn-block" role="button" href="http://info.suite.booking.com/request-demo/<?php echo $link_text = _e('en-us','upbootwp');?>" target="_blank" title="<?php  echo $btn_text =  _e( 'Request a Demo', 'upbootwp' );?>"><?php  echo $btn_text =  _e( 'Request a Demo', 'upbootwp' );?></a>
					</footer>
				</section>
       		</div>
       		<div class="col-sm-4 col-md-4 col-lg-4 compare-plans">
				<section class="text-center">
					<header>
						<h2>WebDirect</h2>
						<img class="icon svg" src="/wp-content/uploads/2015/07/colosseum.svg" />
						<p class="summary text-left">Praesent nec gravida ante. Mauris arcu tortor, iaculis ac venenatis id, porta in lorem. Fusce quis molestie orci, sit amet sodales purus.</p>
					</header>
					<ul class="options">
						<li class="opt-items">
							<h3>title</h3>
							<p>Ut turpis lorem</p>
						</li>
						<li class="opt-items">
							<h3>title</h3>
							<p>Ut turpis lorem</p>
						</li>
						<li class="opt-items">
							<h3>Mobile-friendly design</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>
						<li class="opt-items">
							<h3>Translation Support</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>							
					</ul>
					<footer>
						<a class="btn btn-primary btn-lg btn-block" role="button" href="http://info.suite.booking.com/request-demo/<?php echo $link_text = _e('en-us','upbootwp');?>" target="_blank" title="<?php  echo $btn_text =  _e( 'Request a Demo', 'upbootwp' );?>"><?php  echo $btn_text =  _e( 'Request a Demo', 'upbootwp' );?></a>
					</footer>
				</section>
       		</div>
       		<div class="col-sm-4 col-md-4 col-lg-4 compare-plans">
				<section class="text-center">
					<header>
						<h2>WebComplete</h2>
						<img class="icon svg" src="/wp-content/uploads/2015/07/ChristRedeemer.svg" />
						<p class="summary text-left">Praesent nec gravida ante. Mauris arcu tortor, iaculis ac venenatis id, porta in lorem. Fusce quis molestie orci, sit amet sodales purus.</p>
					</header>
					<ul class="options">
						<li class="opt-items">
							<h3>title</h3>
							<p>Ut turpis lorem</p>
							<small>Contact us to learn more</small>
						</li>
						<li class="opt-items">
							<h3>title</h3>
							<p>Ut turpis lorem</p>
						</li>
						<li class="opt-items">
							<h3>Mobile-friendly design</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>
						<li class="opt-items">
							<h3>Translation Support</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>					
					</ul>
					<footer>
						<a class="btn btn-primary btn-lg btn-block" role="button" href="http://info.suite.booking.com/request-demo/<?php echo $link_text = _e('en-us','upbootwp');?>" target="_blank" title="<?php  echo $btn_text =  _e( 'Request a Demo', 'upbootwp' );?>"><?php  echo $btn_text =  _e( 'Request a Demo', 'upbootwp' );?></a>
					</footer>
				</section>
       		</div>
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
