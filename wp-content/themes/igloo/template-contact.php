<?php
/*
 * Template Name: Contact Page
 */
?>
<?php get_header(); ?>

<div id="main" class="row" role="main">
	<div class="twelve columns">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="container shd">
				<div class="row">
					<div class="eight columns">
						<?php the_content(); ?>
					</div>

					<div id="sidebar" class="four columns">
						<?php dynamic_sidebar('contact-widgets'); ?>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>

	</div>
</div><!-- #main -->

<?php get_footer(); ?>