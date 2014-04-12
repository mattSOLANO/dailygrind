<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dailygrind
 */

get_header(); ?>

	<div class="intro">
    <div class="introInner">
      <h3><i class="fa fa-chevron-left"></i>daily<span>grind</span><i class="fa fa-chevron-right"></i></h3>
      <p>Simply a blog about design and development</p>
      <div class="gears">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/gear.svg" alt="gear1" class="gear1">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/gear.svg" alt="gear1" class="gear2">
      </div>
    </div>
  </div>


	<div class="wrapper homeWrapper">

    <div class="main">

      <div class="feed">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php dailygrind_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

			</div><!-- End of Feed -->

		</div><!-- End of Main -->

	</div><!-- End of Wrapper-->

<?php get_footer(); ?>
