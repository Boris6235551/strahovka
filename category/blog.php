<?php
/*
Template Name: blog
*/

get_header();
?>
<div class="wrapper">
	<div class="content">
		<h2>Блог</h2>

		<?php
		$query = new WP_Query('post_type=post');

		global $post;

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				?>
				<div id="primary" class="post">
					<div class="post_text">	
						<a href='<?php the_permalink(); ?>'>
							<h3 class="post_title"><?php echo get_the_title(); ?></h3>
							<?php the_post_thumbnail(); ?>
							<?php the_excerpt(); ?>
						</a>
						<a class="more" href="<?php the_permalink(); ?>">Читать далее...</a>
					</div>
				</div>
				<?php
			}
		} else {
		}

		wp_reset_postdata(); 
		?>

	</div>
</div>
<?php
get_footer();
