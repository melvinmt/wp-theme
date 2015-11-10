<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */
?>

</div><!-- #main .site-main -->

<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
	<div class="site-info"  style="margin-bottom:20px;">
		<a target="_blank" href="http://twitter.com/intent/tweet?text=<?php echo urlencode('"@melvinmt: '.html_entity_decode(get_the_title()).'" '.get_permalink().'');?>">Leave a comment</a>
	</div>
	<div class="site-info" style="margin-bottom:80px;">
		&copy; 1985-<?php echo date('Y');?> <a href="/">Melvin Tercan</a>
	</div>
	<!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>