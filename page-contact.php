<?php
/**
 * Template Name: Contact Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
$contact_page_title = get_field( 'contact_page_title' );
$contact_page_sub_title = get_field( 'contact_page_sub_title' );
$left_pane_title_1 = get_field( 'left_pane_title_1' );
$left_pane_title_2 = get_field( 'left_pane_title_2' );
$left_pane_content_1 = get_field( 'left_pane_content_1' );
$left_pane_content_2 = get_field( 'left_pane_content_2' );
$form_shortcode = get_field( 'form_shortcode' );


?>

<div class="content-wrap"> 

<section class="pg-content contact-content">
  	
	<header id="pg-header" class="pg-header">

	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.1610139007!2d-84.28239568508086!3d34.091015423133776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f575f273862943%3A0x2adf214d87dfb5c1!2s2657+Ashleigh+Ln%2C+Alpharetta%2C+GA+30004%2C+USA!5e0!3m2!1sen!2smy!4v1449387572089" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>. -->

		<?php	while ( have_posts() ) : the_post();  ?>

				<?php	the_content(); 	?>

		<?php endwhile; // End of the loop. ?>
	  

	</header><!-- /header -->

	<div class="container">

		<section class="header-txt">
		  <div class="pg-header-txt container">
		  	<h2><?php echo $contact_page_title; ?></h2>
		  	<h4><em><?php echo $contact_page_sub_title; ?></em></h4>
		  </div>
		</section>

		<section class="col-content col-md-6">

		  <div class="contact-header-txt">
		  	<h3><?php echo $left_pane_title_1; ?></h3>
		  </div>
		
			<div class="address-text">

			<?php echo $left_pane_content_1; ?>
				
			</div>

		  <div class="contact-header-txt">
              <h3><?php echo $left_pane_title_2; ?></h3>
		  </div>

			<div class="contact-social">
			
			<?php echo $left_pane_content_2; ?>
							
			</div>

			
		</section>

		<section class="col-form col-md-6">

		 <div class="contact-header-txt">
		  	<h3>Contact Us</h3>
		 </div>

			    

			   <?php echo do_shortcode( $form_shortcode ); ?>   
			
		</section>

    </div>

</section>

</div> <!-- END CONTENT WRAP. WRAPS THE WHOLE CONTENT -->	

<?php
get_footer();
