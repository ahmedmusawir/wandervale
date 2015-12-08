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
		  	<h2>Get in touch with us</h2>
		  	<h4><em>Don't be shy ...</em></h4>
		  </div>
		</section>

		<section class="col-content col-md-6">

		  <div class="contact-header-txt">
		  	<h3>Our Office</h3>
		  </div>
		
			<div class="address-text">
				<p>198  West 21th Street, Suite 721</p>
				<p>New York, NY 10010</p>
				<p><i class="fa fa-envelope"></i> Email: youremail@yourdomain.com</p>
				<p><i class="fa fa-phone-square"></i> Phone: +88 (0) 101 0000 000</p>
				<p><i class="fa fa-fax"></i> Fax: +88 (0) 202 0000 001</p>
			</div>

		  <div class="contact-header-txt">
              <h3>Let's Socialize</h3>
		  </div>

			<div class="contact-social">
				<span><a href="#"><i class="fa fa-twitter fa-3x"></i></a></span>				
				<span><a href="#"><i class="fa fa-facebook fa-3x"></i></a></span>				
				<span><a href="#"><i class="fa fa-google-plus fa-3x"></i></a></span>				
				<span><a href="#"><i class="fa fa-instagram fa-3x"></i></a></span>				
				<span><a href="#"><i class="fa fa-pinterest fa-3x"></i></a></span>				
			</div>

			
		</section>

		<section class="col-form col-md-6">

		 <div class="contact-header-txt">
		  	<h3>Contact Us</h3>
		  </div>

			      
			<form class="contact-form">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">File input</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Example block-level help text here.</p>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>

		</section>

    </div>

</section>

</div> <!-- END CONTENT WRAP. WRAPS THE WHOLE CONTENT -->	

<?php
get_footer();
