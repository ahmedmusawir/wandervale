<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Wandervale
 */

get_header(); ?>

<div class="content-wrap">

	<section id="primary" class="pg-content pg-search">
		<main id="main" class="container" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wandervale' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<section class="col-md-8 search-content">
				
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</section>
			<section class="col-md-4">
				
				<?php get_sidebar(); ?>
							
			</section>

		</main><!-- #main -->
	</section><!-- #primary -->

</div> <!-- end content wrap  -->
<?php
get_footer();
