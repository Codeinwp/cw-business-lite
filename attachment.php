<?php
/**
 *	The template for displaying Attachment.
 *
 *	@package ThemeIsle
 */
get_header();
?>
<div class="wrap">

	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>

				<article id="single">
					<h1><?php the_title(); ?></h1>
					<div class="single-entry"> 
						<?php the_post_thumbnail(); ?>
					</div><!--/.single-entry-->
				</article><!--/#single-->

				<?php }
		} else {
			echo '<p>No posts found.</p>';
		}
	?>

</div><!--/.wrap-->
<?php get_footer(); ?>