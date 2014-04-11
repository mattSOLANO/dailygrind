<?php
/**
 * @package dailygrind
 */
?>

<div class="postContent">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php dailygrind_posted_on(); ?>
		</div> --><!-- .entry-meta -->
	<!-- </header> --><!-- .entry-header -->

	<h1 class="entry-title"><?php the_title(); ?></h1>

	<div class="content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;
?>

</div><!-- End of Post Content -->

<div class="postMeta">
	<p class="openMeta"><i class="fa fa-info-circle fa-lg"></i><i class="fa fa-chevron-right fa-lg"></i></p>
  <label>By:</label>
  <p class="author"><?php the_author(); ?></p>
  <label>On:</label>
  <p class="date"><?php the_date('n/d/y'); ?></p>
  <label>Tags:</label>
  <p class="tags"><?php the_tags(''); ?></p>
</div>




