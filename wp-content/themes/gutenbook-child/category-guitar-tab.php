<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GutenBook
 */

get_header();
?>

<div class="container-fluid">
	<?php if ( have_posts() ) : ?>
		<div class="row justify-content-center page-header-row">
			<div class="col-md-8">
				<header class="page-header text-center">
				<h1 class="page-title">Guitar Tabs</h1>
				</header><!-- .page-header -->
			</div>
		</div>
	<?php endif; ?>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div id="primary" class="content-area col-md-8">
			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content-guitar-tab' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();