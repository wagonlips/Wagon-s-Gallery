	<div id="footer" class="span-22 append-1 prepend-1 last">

		<div id="colophon">

	<?php if ( is_active_sidebar('footer-widget-area') ) : ?>
	<div id="footer-widget-area" class="widgets"><ul>
		<?php dynamic_sidebar('footer-widget-area'); ?>
	</ul></div>
	<?php endif; ?>

		&copy;<?php echo date(Y); ?> <?php bloginfo('name'); ?><br />
		Powered by <a href="http://wordpress.org/">WordPress</a> using <a href="http://www.fireandknowledge.org/blueprint/">Blueprint</a>.

		<!-- <?php echo $wpdb->num_queries; ?> queries. <?php timer_stop(1); ?> seconds. -->
                </div><!-- #colophon -->

	</div><!-- /footer -->

</div> <!-- /container -->

		<?php wp_footer(); ?>
</body>
</html>
