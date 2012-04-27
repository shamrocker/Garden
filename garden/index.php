
<?php get_header(); ?>
	
	<div id="wrapper">

		<div id="content" class="narrowcolumn">

			<div id="imageWrap">
            
				<img width="700" height="400" src="<?php bloginfo('template_directory'); ?>/images/index.jpg">
            
            </div>

			<div id="main">
				<?php if (have_posts()) : ?>
<ul class="posts">
					<?php while (have_posts()) : the_post(); ?>

						
							
							<li><p class="date" cate="tech"><?php the_time('Y-m-d') ?></p>

							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>

							</li>

						

					<?php endwhile; ?>
</ul>
					<div class="navigation">
						<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
					</div>

				<?php else: ?>

					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>

				<?php endif; ?>
			</div>

			<div style="clear:both"></div>

		</div>

	</div>

