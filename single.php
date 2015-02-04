<?php
/**
 * The Template for displaying all single posts.
 *
 * @package asu-wordpress-web-standards-theme
 */

get_header(); ?>

<div id="primary" class="content-area col-sm-8 col-sm-offset-2">
	<?php echo do_shortcode( '[asu_breadcrumbs]' ); ?>
	<main id="main" class="site-main" role="main">

	  <header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php asu_webstandards_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<?php 
			while ( have_posts() ) { 
				the_post(); 

				get_template_part( 'content', 'single' );

				asu_webstandards_post_nav();
			}
			?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>