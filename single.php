<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>
<div class="wrapper">
	<div class="content">
		<h2>Блог</h2>

		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<div class="post">
				<div class="post_text">
					<h3 class="post_title"><?php echo get_the_title(); ?></h3>
		<?php
					get_template_part( 'template-parts/content', get_post_type() );
					// the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
		?>
				</div>
			</div>
		<?php
		endwhile; // End of the loop.
		?>

	</div><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
