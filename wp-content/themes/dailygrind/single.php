<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dailygrind
 */

get_header(); ?>


  <div class="wrapper">

    <div class="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php dailygrind_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- End of Main -->

	</div><!-- End of Wrapper-->

<?php get_footer(); ?>