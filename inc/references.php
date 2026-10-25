<?php
/**
 * Custom post type "Reference": title, featured image, link to the project.
 * Nothing is shown on the site until real entries exist.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', function () {
	register_post_type( 'reference', [
		'labels'       => [
			'name'          => __( 'References', 'hellogelb' ),
			'singular_name' => __( 'Reference', 'hellogelb' ),
			'add_new_item'  => __( 'Add reference', 'hellogelb' ),
		],
		'public'       => false,
		'show_ui'      => true,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-portfolio',
		'supports'     => [ 'title', 'thumbnail', 'page-attributes' ],
	] );
} );

add_action( 'add_meta_boxes', function () {
	add_meta_box( 'hg_reference_url', __( 'Project link', 'hellogelb' ), function ( $post ) {
		wp_nonce_field( 'hg_reference_url', 'hg_reference_nonce' );
		printf(
			'<input type="url" name="hg_reference_url" value="%s" style="width:100%%" placeholder="https://">',
			esc_attr( (string) get_post_meta( $post->ID, '_hg_reference_url', true ) )
		);
	}, 'reference', 'side' );
} );

add_action( 'save_post_reference', function ( $post_id ) {
	if ( ! isset( $_POST['hg_reference_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['hg_reference_nonce'] ) ), 'hg_reference_url' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	$url = isset( $_POST['hg_reference_url'] ) ? esc_url_raw( wp_unslash( $_POST['hg_reference_url'] ) ) : '';
	update_post_meta( $post_id, '_hg_reference_url', $url );
} );

// Polylang: make the type translatable.
add_filter( 'pll_get_post_types', function ( $types ) {
	$types['reference'] = 'reference';
	return $types;
} );
