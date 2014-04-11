<?php
/**
 * @package dailygrind
 */
?>

<!-- <div class="postContent"> -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
	<?php if ( 'post' == get_post_type() ) : ?>
		<p class="meta">
	    <span class="author"><?php the_author(); ?></span>
	    |
	    <span class="tags"><?php the_tags(''); ?></span>
	  </p>
	  <p class="date"><?php the_date('n/d/y'); ?></p>
	<?php endif; ?>

  <div class="description">
    <?php the_excerpt(); ?>
  </div>
	
	<p class="readMore"><a href="<?php the_permalink(); ?>">Read <i class="fa fa-caret-right"></i></a></p>

</article><!-- #post-## -->



 <!--</div>--><!-- End of Post Content -->