<?php
/**
 * Template Name: WebConectivity Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="conectivityIntro" class="sub-section white default-page">
	<div class="container-fluid">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>	
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),
					'after'  => '</div>',
				));
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
	<?php endwhile; // end of the loop. ?>
	</div>
</section>
<section id="connectivityPartners" class="sub-section white connect">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/AvailPro.png" alt="AvailPro" class="img-responsive" />
				<h4 class="text-center">AvailPro</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/BookingCenter.png" alt="BookingCenter" class="img-responsive" />
				<h4 class="text-center">BookingCenter</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/Coho-Res.png" alt="Coho-Res" class="img-responsive" />
				<h4 class="text-center">Coho-Res</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/Genares.png" alt="Genares" class="img-responsive" />
				<h4 class="text-center">Genares</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/Cloudbeds.png" alt="Cloudbeds" class="img-responsive" />
				<h4 class="text-center">Cloudbeds</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/ParityRate.png" alt="ParityRate" class="img-responsive" />
				<h4 class="text-center">ParityRate</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/eRevMax.png" alt="eRevMax" class="img-responsive" />
				<h4 class="text-center">eRevMax</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/SiteMinder.png" alt="SiteMinder" class="img-responsive" />
				<h4 class="text-center">SiteMinder</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/SmartHotel.png" alt="SmartHotel" class="img-responsive" />
				<h4 class="text-center">SmartHotel</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/WuBook.png" alt="WuBook" class="img-responsive" />
				<h4 class="text-center">WuBook</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/freetobook.png" alt="freetobook" class="img-responsive" />
				<h4 class="text-center">freetobook</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/RateGain.png" alt="RateGain" class="img-responsive" />
				<h4 class="text-center">RateGain</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/Finite.png" alt="Finite" class="img-responsive" />
				<h4 class="text-center">Finite</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/Phobs.png" alt="Phobs" class="img-responsive" />
				<h4 class="text-center">Phobs</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2015/09/synxis.png" alt="Synxis" class="img-responsive" />
				<h4 class="text-center">Synxis</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-4 col-md-4">
				<img src="/wp-content/uploads/2015/09/Viato.png" alt="Viato" class="img-responsive" />
				<h4 class="text-center">Viato</h4>
			</div>
			<!-- <div class="col-md-4">
					<img src="/wp-content/uploads/2015/09/Phobs.png" alt="Phobs" class="img-responsive" />
					<h4 class="text-center">Genares</h4>
				</div> -->
			<!-- <div class="col-md-4">
					<img src="/wp-content/uploads/2015/09/synxis.png" alt="Synxis" class="img-responsive" />
					<h4 class="text-center">Genares</h4>
				</div> -->
		</div>		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default interest">
					<div class="panel-heading">
						<p class="panel-title">Is your brand interested in becoming a BookingSuite Connectivity Partner?</p>
				</div>
				<div class="panel-body">
					<p> Send us an email at: <a href="mailto:contact@suite.booking.com">contact@suite.booking.com</a></p>
					
					</form>				   
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
