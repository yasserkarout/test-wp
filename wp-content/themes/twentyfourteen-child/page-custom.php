<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 * Template Name: My Custom Page
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
			echo '<h1>'.get_the_title().'</h1>';
			// The Query
			$the_query = new WP_Query('author=yasserk');

			// The Loop
			if ( $the_query->have_posts() ) {
				echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<li>' . get_the_title() . '</li>';
					

				}
				echo '</ul>';
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata(); ?>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
			<h1>ddasfs</h1>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
