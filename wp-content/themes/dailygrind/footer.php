<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dailygrind
 */
?>


	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footerInner">
      <div class="tagCloud">
        <h3>Popular Tags</h3>
        <?php wp_tag_cloud('smallest=8&largest=8'); ?>
      </div>
    </div>

    

		<div class="site-info">
      <p>&copy; <?php echo date("Y") ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Designed and Maintained by <a href="http://mattsolano.com">Matt Solano</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts-ck.js"></script>

</body>
</html>
