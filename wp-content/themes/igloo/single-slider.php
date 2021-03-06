<?php get_header(); ?>

<div id="main" class="row" role="main">
	<div class="eight columns">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article class="entry">
				<div class="container shd">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php $img_full = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
						<figure class="entry-thumb">
							<a class="fancybox" href="<?php echo $img_full[0]; ?>"><?php the_post_thumbnail('ci_featured_single'); ?>
								<div class="overlay"></div>
							</a>
						</figure>
					<?php endif; ?>

					<div class="entry-excerpt">
						<?php the_content(); ?>
					</div>
				</div>
			</article>

			<?php comments_template(); ?>

		<?php endwhile; endif; ?>

	</div>

	<?php get_sidebar(); ?>
</div> <!-- #main -->

<?php get_footer(); ?>