<?php get_header(); ?>

<div id="page">

	<div class="column span-22 append-1 prepend-1 last" id="maincontent">

		<div class="content">

			<?php 
			
				//$my_query = new WP_Query('showposts=8');
				//while ($my_query->have_posts()) : $my_query->the_post();
				
				// Don't show featured item
				//if ($post->ID == $featuredID) continue;
                                if ( has_post_thumbnail() ) {
                                  // the current post has a thumbnail
                                  the_post_thumbnail();
                                } else {
                                  // the current post lacks a thumbnail
                                }

				
				while (have_posts()) : the_post();
				
				?>
				
				<?php getPost($post); ?>
					
				<?php endwhile; ?>
	
					<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>

		</div> <!-- /content -->
	</div> <!-- /maincontent-->
	
</div> <!-- /page -->

<?php get_footer(); ?>
