<section id="subheader" class="cf">
	<div class="wrap cf">
		<div class="subheader-content <?php if ( get_theme_mod( 'cw_business_lite_header_contactform7_shortcode' ) ) { } else { echo 'subheader-content-no-sidebar'; } ?>">
			<h3>
				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.' ) ) {
					echo get_theme_mod( 'cw_business_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.' );
				}
				?>
			</h3>
			<div class="subheader-content-entry">
				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_header_content', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.' ) ) {
					echo get_theme_mod( 'cw_business_lite_frontpage_header_content','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.' );
				}
				?>
			</div><!--/.subheader-content-entry-->
		</div><!--/.subheader-content-->
		
	</div><!--/.wrap .cf-->
</section><!--/#subheader-->