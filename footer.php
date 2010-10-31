	<div id="footer">

		<div id="colophon">

<?php
	get_sidebar( 'footer' );
?>

		&copy;<?php echo date(Y); ?> <?php bloginfo('name'); ?><br />
		Powered by <a href="http://wordpress.org/">WordPress</a> using <a href="http://www.fireandknowledge.org/blueprint/">Blueprint</a>.

		<!-- <?php echo $wpdb->num_queries; ?> queries. <?php timer_stop(1); ?> seconds. -->
                </div><!-- #colophon -->

	</div><!-- /footer -->

</div> <!-- /container -->

		<?php wp_footer(); ?>
</body>
</html>
