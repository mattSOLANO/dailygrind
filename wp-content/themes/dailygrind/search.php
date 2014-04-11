<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package dailygrind
 */

get_header(); ?>

	<div class="wrapper">

    <div class="main">

      <div class="feed">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title search-title"><?php printf( __( 'Search Results for: %s', 'dailygrind' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php dailygrind_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		
			</div><!-- End of Feed -->

		</div><!-- End of Main -->

	</div><!-- End of Wrapper-->

<?php get_footer(); ?>
