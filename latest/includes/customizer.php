<?php

function cw_business_lite_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header Customizer
    */
    $wp_customize->add_section( 'cw_business_lite_header' , array(
    	'title'       => __( 'Header', 'cw-business-lite' ),
    	'priority'    => 200,
	) );

		/* Header - Logo */
		$wp_customize->add_setting( 'cw_business_lite_header_logo' , array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_header_logo', array(
		    'label'    => __( 'Logo:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_logo',
		    'priority' => '1',
		) ) );

		/* Header - Title */
		$wp_customize->add_setting( 'cw_business_lite_header_title' , array('sanitize_callback' => 'esc_html'));
		$wp_customize->add_control( 'cw_business_lite_header_title', array(
		    'label'    => __( 'Contact Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_title',
			'priority' => '2',
		) );

		/* Header - Subtitle */
		$wp_customize->add_setting( 'cw_business_lite_header_subtitle', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_header_subtitle', array(
		    'label'    => __( 'Contact telephone:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_subtitle',
			'priority' => '3',
		) );

		/* Header - YouTube link */
		$wp_customize->add_setting( 'cw_business_lite_header_youtube', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( 'cw_business_lite_header_youtube', array(
		    'label'    => __( 'YouTube link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_youtube',
			'priority' => '4',
		) );

		/* Header - Facebook link */
		$wp_customize->add_setting( 'cw_business_lite_header_facebook', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( 'cw_business_lite_header_facebook', array(
		    'label'    => __( 'Facebook link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_facebook',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'cw_business_lite_header_googleplus' , array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control( 'cw_business_lite_header_googleplus', array(
		    'label'    => __( 'Google+ link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_googleplus',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'cw_business_lite_header_twitter', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( 'cw_business_lite_header_twitter', array(
		    'label'    => __( 'Twitter link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_twitter',
			'priority' => '6',
		) );

		/* Header - Contact Form 7 - Title */
		$wp_customize->add_setting( 'cw_business_lite_header_contactform7_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_header_contactform7_title', array(
		    'label'    => __( 'Contact Form 7 - Title', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_contactform7_title',
			'priority' => '7',
		) );

    /*
    ** Front Page Customizer
    */
    $wp_customize->add_section( 'cw_business_lite_frontpage' , array(
    	'title'       => __( 'Front Page', 'cw-business-lite' ),
    	'priority'    => 250,
	) );

		/* Front Page - Header Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_header_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_header_title', array(
		    'label'    => __( 'Subheader Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_header_title',
			'priority' => '1',
		) );

		/* Front Page - Header Content */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_header_content' , array('sanitize_callback' => 'esc_html'));
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_frontpage_header_content', array(
		            'label' 	=> __( 'Subheader Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_header_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Front Page - Subheader Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_subheader_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_subheader_title',
			'priority' => '3',
		) );

		/* Front Page - Firstly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_firstlybox_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_firstlybox_title',
			'priority' => '4',
		) );

		/* Front Page - Firstly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_firstlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_firstlybox_image', array(
		            'label' 	=> __( 'Features Box (first) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_firstlybox_image',
		            'priority' 	=> '5'
		        )
		    )
		);

		/* Front Page - Secondly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_secondlybox_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_secondlybox_title',
			'priority' => '6',
		) );

		/* Front Page - Secondly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_secondlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_secondlybox_image', array(
		            'label' 	=> __( 'Features Box (two) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_secondlybox_image',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Front Page - Thirdly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thirdlybox_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_thirdlybox_title',
			'priority' => '8',
		) );

		/* Front Page - Thirdly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thirdlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_thirdlybox_image', array(
		            'label' 	=> __( 'Features Box (three) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_thirdlybox_image',
		            'priority' 	=> '9'
		        )
		    )
		);

		/* Front Page - The Content - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_thecontent_title', array(
		    'label'    => __( 'The Content - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_thecontent_title',
			'priority' => '10',
		) );

		/* Front Page - The Content - Content */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_content', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_frontpage_thecontent_content', array(
		            'label' 	=> __( 'The Content - Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_thecontent_content',
		            'priority' 	=> '11'
		        )
		    )
		);


		/* Front Page - Our Clients - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_title' , array('sanitize_callback' => 'esc_html'));
		$wp_customize->add_control( 'cw_business_lite_frontpage_ourclients_title', array(
		    'label'    => __( 'Our Clients - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_title',
			'priority' => '14',
		) );

		/* Front Page - Our Clients - Logo 1 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo1', array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Our Clients - Logo 1:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo1',
		    'priority' => '15',
		) ) );

		/* Front Page - Our Clients - Logo 2 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo2', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Our Clients - Logo 2:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo2',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 3 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo3' , array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Our Clients - Logo 3:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo3',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 4 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo4', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Our Clients - Logo 4:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo4',
		    'priority' => '17',
		) ) );

		/* Front Page - Our Clients - Logo 5 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo5', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Our Clients - Logo 5:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo5',
		    'priority' => '18',
		) ) );

		/* Front Page - Our Clients - Logo 6 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo6', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo6', array(
		    'label'    => __( 'Our Clients - Logo 6:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo6',
		    'priority' => '19',
		) ) );

	/*
    ** Contact Customizer
    */
    $wp_customize->add_section( 'cw_business_lite_contact' , array(
    	'title'       => __( 'Contact', 'cw-business-lite' ),
    	'priority'    => 350,
	) );

		/* Contact - Sidebar - Map Title */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_map_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_map_title', array(
		    'label'    => __( 'Sidebar - Map Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_map_title',
			'priority' => '1'
		) );

		/* Contact - Sidebar - Map */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_map', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_contact_sidebar_map', array(
		            'label' 	=> __( 'Sidebar - Map (iframe):', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_contact',
		            'settings' 	=> 'cw_business_lite_contact_sidebar_map',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Contact - Sidebar - Title */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_title', array(
		    'label'    => __( 'Sidebar - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_title',
			'priority' => '3'
		) );

		/* Contact - Sidebar - Address 1 */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_address1', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_address1', array(
		    'label'    => __( 'Sidebar - Country Address:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_address1',
			'priority' => '4'
		) );

		/* Contact - Sidebar - Address 2 */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_address2', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_address2', array(
		    'label'    => __( 'Sidebar - City Address:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_address2',
			'priority' => '5'
		) );

		/* Contact - Sidebar - Address 3 */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_address3', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_address3', array(
		    'label'    => __( 'Sidebar - Street Address:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_address3',
			'priority' => '6'
		) );

		/* Contact - Sidebar - Content */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_content' , array('sanitize_callback' => 'esc_html'));
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_contact_sidebar_content', array(
		            'label' 	=> __( 'Sidebar - Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_contact',
		            'settings' 	=> 'cw_business_lite_contact_sidebar_content',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Contact - Sidebar - Phone */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_phone', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_phone', array(
		    'label'    => __( 'Sidebar - Phone:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_phone',
			'priority' => '9'
		) );

		/* Contact - Sidebar - Website */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_website', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_website', array(
		    'label'    => __( 'Sidebar - Website:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_website',
			'priority' => '11'
		) );

		/* Contact - Sidebar - Email */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_email', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_email', array(
		    'label'    => __( 'Sidebar - Email:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_email',
			'priority' => '13'
		) );

		/* Contact - Sidebar - Socials Title */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_socials_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_socials_title', array(
		    'label'    => __( 'Sidebar - Socials Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_socials_title',
			'priority' => '14'
		) );

	/*
    ** 404 Customizer
    */
    $wp_customize->add_section( 'cw_business_lite_404' , array(
    	'title'       => __( '404 Page', 'cw-business-lite' ),
    	'priority'    => 400,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'cw_business_lite_404_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_404_title', array(
		    'label'    => __( '404 - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_404',
		    'settings' => 'cw_business_lite_404_title',
			'priority' => '1',
		) );

		/* 404 - Title */
		$wp_customize->add_setting( 'cw_business_lite_404_subtitle', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_404_subtitle', array(
		    'label'    => __( '404 - Subtitle:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_404',
		    'settings' => 'cw_business_lite_404_subtitle',
			'priority' => '2',
		) );

		/* 404 - Content */
		$wp_customize->add_setting( 'cw_business_lite_404_content', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_404_content', array(
		            'label' 	=> __( '404 - Content', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_404',
		            'settings' 	=> 'cw_business_lite_404_content',
		            'priority' 	=> '3'
		        )
		    )
		);

}
add_action( 'customize_register', 'cw_business_lite_customizer' );

if( class_exists( 'WP_Customize_Control' ) ):
	class cw_business_lite_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>