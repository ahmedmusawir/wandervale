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
<div class="content-wrap"> 

<article class="front-page-slider">
	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="img/slide1.jpg" alt="...">
	      <!-- <img src="http://lorempixel.com/1920/400/abstract/1" alt="..."> -->
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	    <div class="item">
	      <img src="img/slide2.jpg" alt="...">
	      <!-- <img src="http://lorempixel.com/1920/400/abstract/2" alt="..."> -->
	      <div class="carousel-caption">
	        
	      </div>
	    </div>

	    <div class="item">
	      <img src="img/slide3.jpg" alt="...">
	      <!-- <img src="http://lorempixel.com/1920/400/abstract/3" alt="..."> -->
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	    
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

</article>

<section class="fp-blk-1">
	
	<div class="container">
		
		<div class="row">

		<h2 class="header-txt">FINEST ARCHITECTURAL SELECTION</h2>
		<em><p>Aboluetely Stunning Design & Functionality</p></em>


		<article class="img-box col-md-4">

			<img class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" src="img/sec1_imgbox1.jpg" alt="">

			<h4>WE DEVELOP BRANDS</h4>
			
			<p class="img-box-text">
				We have been creating homes for families in Singapore for over 35 years, first earning an outstanding track record and award-winning expertise in construction.
				That's why we are listed on the Mainboard of the Singapore Exchange
			</p>

		</article>

		<article class="img-box col-md-4">

			<img src="img/sec2_imgbox2.jpg" alt="">

			<h4>CUSTOM ESTATE SOLUTIONS</h4>
			
			<p class="img-box-text">
				We are recognised as an established property development and construction company with a broad portfolio of residential, commercial, industrial and retail developments, with core foundations of prime location, quality workmanship efficiency.
			</p>

		</article>

		<article class="img-box col-md-4">

			<img class="wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" src="img/sec3_imgbox3.jpg" alt="">

			<h4>REALIZE YOUR DREAMS</h4>
			
			<p class="img-box-text">
				Over the years, we have built a name in the market for quality projects with its creed of maintaining high and consistent standards of quality on every project. This is evident from the various awards and recognition obtained from industry bodies over the years.
			</p>

		</article>

	</div>
	</div>

</section>

<style type="text/css" media="screen">

.fp-blk-2 {
	background: url(img/parallax_01-1024x533.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
	
</style>
<section class="fp-blk-2">

	<div class="container">

		<h2 class="header-txt">WHY WANDERVALE?</h2>
		<em><p>Don't let an opportunity of a life time pass you by ...</p></em>


		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">

			<i class="fa fa-subway  fa-5x"></i> 

			<h4>TRANSPORT</h4>
			
			<ul class="img-box-text">

				<li>Choa Chu Kang (NS4/BP1) MRT, LRT and Bus Interchange
				<li>Bukit Panjang Integrated Transport Hub (LRT/ DTL2/ Bus)
				<li>Near KJE, connected to PIE and BKE
			
			</ul>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay=".5s">

			<i class="fa fa-shopping-basket fa-5x"></i> 

			<h4>SHOPPING MALLS</h4>
			
			<ul class="img-box-text">

				<li>Lot One Shoppers’ Mall
				<li>Hillion Mall (2017)
				<li>Bukit Panjang Plaza
				<li>Junction 10
				<li>Yew Tee Point
			
			</ul>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="1s">

			<i class="fa fa-bus fa-5x"></i> 

			<h4>BUSES</h4>
			
			<ul class="img-box-text">

				<li>Bus stop opp Blk 210: 172, 190, 975, 985
				<li>Bus stop in front of CCK Polyclinic: 190, 307, 975, 975A, 982E, 985
				<li>Direct bus to Orchard Shopping Belt and Marina Bay
			
			</ul>

		</article>

		

			<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">

			<i class="fa fa-graduation-cap fa-5x"></i> 

			<h4>EDUCATION</h4>
			
			<ul class="img-box-text">

				<h5>PRIMARY SCHOOLS</h5>
				<li>South View Primary School
				<li>De La Salle Primary School
				<h5>SECONDARY SCHOOL</h5>
				<li>Bukit Panjang Government High School</li>
				<h5>JUNIOR COLLEGE</h5>
				<li>Pioneer Junior College</li>

				
			
			</ul>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="2s">

			<i class="fa fa-cutlery fa-5x"></i> 

			<h4>MARKETS/FOOD CENTERS</h4>
			
			<ul class="img-box-text">

				<li>Teck Whye Shopping Centre
				<li>Keat Hong Shopping Centre
				<li>Limbang Shopping Centre
				<li>Bukit Panjang Hawker Centre & Market
			
			</ul>

		</article>

		<article class="img-box col-md-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="2.5s">

			<i class="fa fa-google-wallet fa-5x"></i> 

			<h4>LIFE STYLE</h4>
			
			<ul class="img-box-text">

				<li>Choa Chu Kang Park
				<li>Choa Chu Kang Community Club
				<li>Choa Chu Kang Sports Hall
				<li>Warren Golf & Country Club
				<li>HomeTeamNS @ Bukit Batok
				<li>Bukit Batok Golf Range
				<li>Bukit Timah Nature Reserve 

			</ul>

		</article>


	</div>
	
</section>

<section class="fp-blk-3">
	
	<div class="container">
		<div class="row">
			
			<article class="image-box col-md-6">
				<img class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" src="img/block3img1.jpg" alt="">
			</article>
			
			<article class="text-box col-md-6">
				
				<h3>
				<i class="fa fa-quote-left fa-4x"></i>
				</h3>
				<em><p>Near Hillion Mall (upcoming 2017) and Bukit Panjang Plaza ...</p></em>

				<div class="text-center more-button">
					<a href="#" class="btn btn-default btn-lg">Learn More</a>
				</div>
			</article>
		</div>
		
	</div>
</section>

<section class="fp-blk-4">
	
	<div class="container">
		<div class="row">

			<article class="image-box col-md-6 col-md-push-6">
				<img class="wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" src="img/block3img2.jpg" alt="">
			</article>
			
			<article class="text-box col-md-6 col-md-pull-6">
				
				<h3>
				<i class="fa fa-quote-left fa-4x"></i>
				</h3>
				<em><p>Walk to Lot One Shoppers’ Mall. Supermarket and Cinema. Enjoy the Mall Aerobics event at Lot One’s Roof Garden ...</p></em>

				<div class="text-center more-button">
					<a href="#" class="btn btn-default btn-lg">Learn More</a>
				</div>

			</article>
			
		</div>
	</div>
</section>

<section class="fp-blk-5">
	
	<div class="container">
		<div class="row">

			<h2 class="header-txt">URA CCK DRAFT MASTER PLAN 2013</h2>

			
			<article class="image-box col-md-12">
				<img src="img/URA-CCK-Draft-Master-Plan-2013.jpg" alt="">
			</article>

			<div class="text-center more-button">
				<a href="#" class="btn btn-default btn-lg">Learn More</a>
			</div>
			
		</div>
	</div>
	
</section>

</div> <!-- END CONTENT WRAP. WRAPS THE WHOLE CONTENT -->
<?php
get_footer();


