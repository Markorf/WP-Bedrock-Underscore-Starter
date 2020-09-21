<?php

/**
 * Enqueue scripts and styles.
 */
function ooteam_scripts() {
	 wp_enqueue_style( 'ooteam-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ooteam-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ooteam-navigation', get_template_directory_uri() . '/dist/js/navigation.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/dist/js/app.min.js', array(), _S_VERSION, true );
	wp_localize_script(
		'custom-script',
		'wp_data',
		array(
			'root_url' => get_site_url(),
			'template_url' => get_stylesheet_directory_uri(),
			'nonce' => wp_create_nonce( 'wp_rest' ),
		)
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ooteam_scripts' );


