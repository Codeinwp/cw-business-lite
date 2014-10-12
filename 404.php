<?php
/**
 *	The template for displaying 404 error.
 *
 *	@package ThemeIsle
 */
get_header();
?>
<div class="wrap cf">
	<div class="blog-title">
		
		<?php
		if ( get_theme_mod( 'cw_business_lite_404_title','404 Error' ) ) {
			echo '<h3>';
				echo get_theme_mod( 'cw_business_lite_404_title','404 Error' );
			echo '</h3>';
		}
		?>
		
	</div><!--/.blog-title-->
	<div class="error-subtitle">
		<?php
		if ( get_theme_mod( 'cw_business_lite_404_subtitle','The page does not exist' ) ) {
			echo get_theme_mod( 'cw_business_lite_404_subtitle','The page does not exist' );
		}
		?>
	</div><!--/.404-subtitle-->
	<div class="error-entry">
		<?php
		if ( get_theme_mod( 'cw_business_lite_404_content','Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try.  Can you try this again or maybe visit our <a title="themeIsle" href="'. home_url() .'">Home Page</a> to start fresh.  We\'ll do better next time.' ) ) {
			echo get_theme_mod( 'cw_business_lite_404_content','Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try.  Can you try this again or maybe visit our <a title="themeIsle" href="'. home_url() .'">Home Page</a> to start fresh.  We\'ll do better next time.' );
		}
		?>
	</div><!--/.error-entry-->
	<div class="error-message">
		<?php _e( '404', 'cw-business-lite' ); ?>
	</div><!--/.error-message-->
</div><!--/.wrap .cf-->
<?php get_footer(); ?>