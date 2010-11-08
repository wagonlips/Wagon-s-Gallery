<div class="column span-3 last" id="sidebar">
	
		<ul>
<?php /* Widgetized sidebar, if you have the plugin installed. */
if ( ! get_post_custom_values('hidesidebar1') && is_active_sidebar('primary-widget-area') ): ?>

	<div id="primary-widget-area" class="widgets primary">
		<?php dynamic_sidebar('primary-widget-area'); ?>
	</div><!-- #primary-widget-area -->

<?php endif; ?>

		</ul>
</div> <!-- /sidebar -->
