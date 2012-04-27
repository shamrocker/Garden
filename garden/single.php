
<?php get_header(); ?>
	
	<div id="wrapper">

		<div id="main">
			<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					

					<div class="entry">
						<h2><?php the_title(); ?></h2>
						
						<div>
							<?php the_content(); ?>
						</div>
						
						<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
							<div id="entry-author-info">
								<div id="author-avatar">
									<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
								</div><!-- #author-avatar -->
								<div id="author-description">
									<h2><?php printf( esc_attr__( '%s', 'twentyten' ), get_the_author() ); ?></h2>
									<?php the_author_meta( 'description' ); ?>
								</div><!-- #author-description -->
							</div><!-- #entry-author-info -->
						<?php endif; ?>

					</div>
				
					<?php comments_template(); ?>

				<?php endwhile; else: ?>

						<p>Sorry, no posts matched your criteria.</p>

				<?php endif; ?>

			</div>

			<div style="clear:both"></div>

		</div>

	</div>

