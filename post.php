	<div class="post <?php if ( is_home() ) { echo "span-7"; }; ?>" id="post-<?php the_ID(); ?>">

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo substr($post->post_title,0,20); if ((strlen($post->post_title)>20) && is_home()) { echo "..."; } ?></a></h2>
		<p class="small <?php if ( is_home() ) { echo "home"; } ?>">
			<?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
			<!-- by <?php the_author() ?> -->
			Published in
			<?php
				
				the_category(', ');
				
				if($post->comment_count > 0) { 
						echo ' &nbsp;|&nbsp; ';
						comments_popup_link('', '1 Comment', '% Comments'); 
				}
				
				edit_post_link('Edit', ' &nbsp;|&nbsp; ', '');
			?>
			
		</p>

		<div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>
		
		<?php if(function_exists('the_tags')) { the_tags(__('<div class="tags-post">Tags: ', 'tags'), ", ", "</div>"); } ?>
		
	</div> <!-- /post -->
