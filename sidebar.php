<div class="column span-3 last" id="sidebar">
	
		<ul id="primary-widget-area" class="widgets primary">
<?php /* Widgetized sidebar, if you have the plugin installed. */
if ( ! get_post_custom_values('hidesidebar1') && is_active_sidebar('primary-widget-area') ): ?>

		<?php dynamic_sidebar('primary-widget-area'); ?>

<?php endif; ?>

		</ul><!-- #primary-widget-area -->
</div> <!-- /sidebar -->
