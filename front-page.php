<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wandervale
 */

get_header(); ?>

<?php 
/**
 *
 * Advanced Custom Fields Variables
 *
 */

// TOP LAYER SLIDER
$slider_shortcode = get_field( 'slider_shortcode' );
$frontpage_title = get_field( 'frontpage_title' );
$frontpage_sub_title = get_field( 'frontpage_sub_title' );

// FRONTPAGE BLOCK 1
$left_pane_image = get_field( 'left_pane_image' );
$left_pane_title	 = get_field( 'left_pane_title' );
$left_pane_text = get_field( 'left_pane_text' );

$middle_pane_image = get_field( 'middle_pane_image' );
$middle_pane_title	 = get_field( 'middle_pane_title' );
$middle_pane_text = get_field( 'middle_pane_text' );

$right_pane_image = get_field( 'right_pane_image' );
$right_pane_title	 = get_field( 'right_pane_title' );
$right_pane_text = get_field( 'right_pane_text' );

// FRONTPAGE BLOCK 2
$block_2_background_image = get_field( 'block_2_background_image' );
$block_2_title = get_field( 'block_2_title' );
$block_2_sub_title = get_field( 'block_2_sub_title' );

$block_2_box_1 = get_field( 'block_2_box_1' );
$block_2_box_2 = get_field( 'block_2_box_2' );
$block_2_box_3 = get_field( 'block_2_box_3' );
$block_2_box_4 = get_field( 'block_2_box_4' );
$block_2_box_5 = get_field( 'block_2_box_5' );
$block_2_box_6 = get_field( 'block_2_box_6' );

// FRONTPAGE BLOCK 3
$block_3_image_1 = get_field( 'block_3_image_1' );
$block_3_text_1 = get_field( 'block_3_text_1' );

$block_3_image_2 = get_field( 'block_3_image_2' );
$block_3_text_2 = get_field( 'block_3_text_2' );

// FRONTPAGE BLOCK 4 
$block_4_title = get_field( 'block_4_title' );
$block_4_image = get_field( 'block_4_image' );
$block_4_button = get_field( 'block_4_button' );

?>

<div class="content-wrap"> 

<article class="front-page-slider">
	
	<?php echo $slider_shortcode ; ?>

</article>

<section class="fp-blk-1">
	
	<div class="container">
		
		<div class="row">

		<h2 class="header-txt"><?php echo $frontpage_title  ?></h2>
		<em><p><?php echo $frontpage_sub_title ?></p></em>


		<article class="img-box col-md-4">

			<img class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" src="<?php echo $left_pane_image[ 'url' ] ?>" alt=" <?php echo $left_pane_image[ 'alt' ] ?>">

			<h4><?php echo $left_pane_title;  ?></h4>
			
			<p class="img-box-text">
				<?php echo $left_pane_text; ?>
			</p>

		</article>

		<article class="img-box col-md-4">

			<img src="<?php echo $middle_pane_image[ 'url' ] ?>" alt="<?php echo $middle_pane_image[ 'alt' ] ?>">

			<h4><?php echo $middle_pane_title;  ?></h4>
			
			<p class="img-box-text">
				<?php echo $middle_pane_text; ?>
			</p>

		</article>

		<article class="img-box col-md-4">

			<img class="wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" src="<?php echo $right_pane_image[ 'url' ] ?>" alt="<?php echo $right_pane_image[ 'alt' ] ?>">

			<h4><?php echo $right_pane_title;  ?></h4>
			
			<p class="img-box-text">
				<?php echo $right_pane_text; ?>
			</p>

		</article>

	</div>
	</div>

</section>

<style type="text/css" media="screen">

.fp-blk-2 {
	background: url( <?php echo $block_2_background_image[ 'url' ] ?> ) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
	
</style>
<section class="fp-blk-2">

	<div class="container">

		<h2 class="header-txt"><?php echo $block_2_title; ?></h2>
		<em><p><?php echo $block_2_sub_title; ?></p></em>


		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">

			<?php echo $block_2_box_1; ?>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay=".5s">

			<?php echo $block_2_box_2; ?>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="1s">

			<?php echo $block_2_box_3; ?>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">

			<?php echo $block_2_box_4; ?>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="2s">

			<?php echo $block_2_box_5; ?>
			
		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="2.5s">

			<?php echo $block_2_box_6; ?>

		</article>


	</div>
	
</section>

<section class="fp-blk-3">
	
	<div class="container">
		<div class="row">
			
			<article class="image-box col-md-6">
				<img class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" src="<?php echo $block_3_image_1[ 'url' ]; ?>" alt="<?php echo $block_3_image[ 'alt' ]; ?>">
			</article>
			
			<article class="text-box col-md-6">
				
				<?php echo $block_3_text_1; ?>				

			</article>

		</div>
	</div>

</section>

<section class="fp-blk-4">
	
	<div class="container">
		<div class="row">

			<article class="image-box col-md-6 col-md-push-6">
				<img class="wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" src="<?php echo $block_3_image_2[ 'url' ]; ?>" alt="<?php echo $block_3_image_2[ 'alt' ]; ?>">
			</article>
			
			<article class="text-box col-md-6 col-md-pull-6">
				
				<?php echo $block_3_text_2; ?>				

			</article>
			
		</div>
	</div>
</section>

<section class="fp-blk-5">
	
	<div class="container">
		<div class="row">

			<h2 class="header-txt"><?php echo $block_4_title; ?>	</h2>

			
			<article class="image-box col-md-12">
				<img src="<?php echo $block_4_image[ 'url' ]; ?>" alt="<?php echo $block_4_image[ 'alt' ]; ?>">
			</article>

			<div class="text-center more-button">
				<?php echo $block_4_button; ?>
			</div>
			
		</div>
	</div>
	
</section>

</div> <!-- END CONTENT WRAP. WRAPS THE WHOLE CONTENT -->
<?php
get_footer();


