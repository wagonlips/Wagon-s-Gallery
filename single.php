<?php get_header(); ?>

<div id="page">

	<div class="column span-17 prepend-1 first" id="maincontent">

		<div class="content">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- <div class="navigation small">
					<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
					<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				</div> 

				<div style="padding-bottom: 15px;"></div> -->

				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<p class="small">
						<?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
						<!-- by <?php the_author() ?> -->
                                                <?php  $mykey_values = get_post_custom_values('product_type');
                                                    foreach ( $mykey_values as $key => $value ) {
                                                        echo $value; 
                                                } ?>

						Published in
						<?php

							the_category(', ');

							if($post->comment_count > 0) { 
									echo ' &nbsp;|&nbsp; ';
									if($post->comment_count > 1) { 
										echo '<a href="#comments">' . $post->comment_count . ' Comments</a>';
									} else {
										echo '<a href="#comments">1 Comment</a>';
									}
							}

							edit_post_link('Edit', ' &nbsp;|&nbsp; ', '');

						?>
					</p>
					
					<div class="entry">
						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
						
						<?php if(function_exists('the_tags')) { the_tags(__('<div class="tags-post">Tags: ', 'tags'), ", ", "</div>"); } ?>

					</div>
				</div>

			<?php comments_template(); ?>

			<?php endwhile; else: ?>

				<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

		</div> <!-- /content -->
	</div> <!-- /maincontent-->

	<?php get_sidebar(); ?>

	</div> <!-- /page -->

<?php get_footer(); ?>
