<?php
/**
 * This is the Archive Page
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

<?php	while ( have_posts() ) : the_post();  ?>

<style type="text/css" media="screen">

	#pg-header {
		
		height: 400px;
		background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) no-repeat top left fixed;
	}

</style>	

  <section class="pg-content">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  	
	  <header id="pg-header" class="pg-header">

		  <div class="pg-header-txt container">
		  	<!-- <h1>Full Width Page</h1> -->
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		  	<h4><em>Extream Beauty ...</em></h4>
		  </div>

	  </header><!-- /header -->

	  <div class="container">
		
		<section class="col-content col-md-8">

    	
			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wandervale' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		</section> <!-- end Col Content -->

<?php endwhile; // End of the loop. ?>

		<section class="col-sidebar col-md-4">

			<?php get_sidebar(); ?>

		</section> <!-- end Col Sidebar -->



      </div> <!-- end container -->
	
	</article><!-- #post-## -->


  </section>


</div> <!-- END CONTENT WRAP. WRAPS THE WHOLE CONTENT -->	

<?php
get_footer();






















