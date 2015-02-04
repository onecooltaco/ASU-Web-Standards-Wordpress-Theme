<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package asu-wordpress-web-standards-theme
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-8 col-sm-offset-2">
		<?php echo do_shortcode( '[asu_breadcrumbs]' ); ?>
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'asu-wordpress-web-standards-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<div class="container">
			<?php 
				while ( have_posts() ) {
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
				}
			?>

			<?php asu_webstandards_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</div><!-- #container -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
