<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="content" class="site-content" role="main">

			<section class="error-404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'independent-publisher' ); ?></h1>
				</header>
				<!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'It looks like nothing was found at this location.', 'independent-publisher' ); ?></p>

					
				</div>
				<!-- .entry-content -->
			</section>
			<!-- .error-404 -->

		</main>
		<!-- #main -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>