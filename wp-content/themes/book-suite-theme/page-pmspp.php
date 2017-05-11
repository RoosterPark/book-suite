<?php get_header(); ?>

<style>
.content-area .sub-section.default-page p {
    text-align: center !important;
	font-size:130%;
	font-weight:600;
}

.content-area .sub-section.default-page h1, .content-area .sub-section.default-page p { text-align: center !important; }

section#index-request-demo { display:none; }
h1.entry-title, header.page-header {display:none;}

section#defaultPage {padding-top:0px;}

div#incentivewrapper {text-align:center !important;}

div.incentives {max-width:616px; text-align:center !important; clear:both !important; overflow:hidden; margin-bottom:20px !important; display:inline-block !important;}
div.incentive {width:300px; float:left; border: 5px solid white; padding:30px; background-color:#F4F4F4;}

span.incentive {text-align:center; color:#000000; font-size:23px !important; padding-bottom:5px; font-weight:600;}
span.incentivetext {text-align:center; color:#000000; font-size:17px;}
div.incentive {min-height:150px !important;}
</style>


<section id="pageMasthead" class="page-hero" role="banner">

	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid" style="font-size:23px; text-align:center !important;">


				<h1 class="page-title" style="padding-top:60px;"><?php the_title(); ?></h1>
				<?php the_field('CPPMSbanner_text'); ?>
				
		</div>
	</div>
</section>
<section id="defaultPage" class="sub-section white default-page">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<!--test-->
				<?php endwhile; // end of the loop. ?>
			</div><!-- .col-md-8 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<?php get_footer(); ?>