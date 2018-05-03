<?php

/*
Plugin Name: Custom Meta Box Template
Plugin URI: https://austinmarketing.co.uk/
Description: Provides a starting point for creating custom meta boxes.
Author: Austin Marketing
Version: 1.0
Author URI: https://austinmarketing.co.uk/
*/


/**
 * Adds a meta box to the post editing screen
 */
function prfx_custom_meta() {
	add_meta_box( 'prfx_meta', __( 'Custom Call to Action Links', 'prfx-textdomain' ), 'prfx_meta_callback', 'page' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
	$prfx_stored_meta = get_post_meta( $post->ID );
	?>

	<fieldset>
    	<legend>Box 1</legend>
	
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-1-url" class="prfx-row-title"><?php _e( 'Link URL', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-1-url" id="meta-text-1-url" value="<?php if ( isset ( $prfx_stored_meta['meta-text-1-url'] ) ) echo $prfx_stored_meta['meta-text-1-url'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-1-1" class="prfx-row-title"><?php _e( 'Line 1', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-1-1" id="meta-text-1-1" value="<?php if ( isset ( $prfx_stored_meta['meta-text-1-1'] ) ) echo $prfx_stored_meta['meta-text-1-1'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-1-2" class="prfx-row-title"><?php _e( 'Line 2', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-1-2" id="meta-text-1-2" value="<?php if ( isset ( $prfx_stored_meta['meta-text-1-2'] ) ) echo $prfx_stored_meta['meta-text-1-2'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-1-action" class="prfx-row-title"><?php _e( 'Action Description', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-1-action" id="meta-text-1-action" value="<?php if ( isset ( $prfx_stored_meta['meta-text-1-action'] ) ) echo $prfx_stored_meta['meta-text-1-action'][0]; ?>" />
		<p>
			<label for="meta-color-1" class="prfx-row-title"><?php _e( 'Background Colour Picker', 'prfx-textdomain' )?></label>
		</p>
		<input name="meta-color-1" type="text" value="<?php if ( isset ( $prfx_stored_meta['meta-color-1'] ) ) echo $prfx_stored_meta['meta-color-1'][0]; ?>" class="meta-color" />
	
	</fieldset>
	
		<fieldset>
    	<legend>Box 2</legend>
	
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-2-url" class="prfx-row-title"><?php _e( 'Link URL', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-2-url" id="meta-text-2-url" value="<?php if ( isset ( $prfx_stored_meta['meta-text-2-url'] ) ) echo $prfx_stored_meta['meta-text-2-url'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-2-1" class="prfx-row-title"><?php _e( 'Line 1', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-2-1" id="meta-text-2-1" value="<?php if ( isset ( $prfx_stored_meta['meta-text-2-1'] ) ) echo $prfx_stored_meta['meta-text-2-1'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-1-2" class="prfx-row-title"><?php _e( 'Line 2', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-2-2" id="meta-text-2-2" value="<?php if ( isset ( $prfx_stored_meta['meta-text-2-2'] ) ) echo $prfx_stored_meta['meta-text-2-2'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-2-action" class="prfx-row-title"><?php _e( 'Action Description', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-2-action" id="meta-text-2-action" value="<?php if ( isset ( $prfx_stored_meta['meta-text-2-action'] ) ) echo $prfx_stored_meta['meta-text-2-action'][0]; ?>" />
		<p>
			<label for="meta-color-2" class="prfx-row-title"><?php _e( 'Background Colour Picker', 'prfx-textdomain' )?></label>
		</p>
		<input name="meta-color-2" type="text" value="<?php if ( isset ( $prfx_stored_meta['meta-color-2'] ) ) echo $prfx_stored_meta['meta-color-2'][0]; ?>" class="meta-color" />
	
	</fieldset>
	
		<fieldset>
    	<legend>Box 3</legend>
	
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-3-url" class="prfx-row-title"><?php _e( 'Link URL', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-3-url" id="meta-text-3-url" value="<?php if ( isset ( $prfx_stored_meta['meta-text-3-url'] ) ) echo $prfx_stored_meta['meta-text-3-url'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-3-1" class="prfx-row-title"><?php _e( 'Line 1', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-3-1" id="meta-text-3-1" value="<?php if ( isset ( $prfx_stored_meta['meta-text-3-1'] ) ) echo $prfx_stored_meta['meta-text-3-1'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-3-2" class="prfx-row-title"><?php _e( 'Line 2', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-3-2" id="meta-text-3-2" value="<?php if ( isset ( $prfx_stored_meta['meta-text-3-2'] ) ) echo $prfx_stored_meta['meta-text-3-2'][0]; ?>" />
		
		<p class="post-attributes-label-wrapper">
			<label for="meta-text-3-action" class="prfx-row-title"><?php _e( 'Action Description', 'prfx-textdomain' )?></label>
		</p>
		<input type="text" name="meta-text-3-action" id="meta-text-3-action" value="<?php if ( isset ( $prfx_stored_meta['meta-text-3-action'] ) ) echo $prfx_stored_meta['meta-text-3-action'][0]; ?>" />
		<p>
			<label for="meta-color-3" class="prfx-row-title"><?php _e( 'Background  Colour Picker', 'prfx-textdomain' )?></label>
		</p>
		<input name="meta-color-3" type="text" value="<?php if ( isset ( $prfx_stored_meta['meta-color-3'] ) ) echo $prfx_stored_meta['meta-color-3'][0]; ?>" class="meta-color" />
	
	</fieldset>
	 
	<p>Set the content of the three boxes at the bottom of pages. Leaving the setting blank will result in the box not being displayed.</p>

	<?php
}



/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
	
	// BOX 1
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-1-url' ] ) ) {
		update_post_meta( $post_id, 'meta-text-1-url', sanitize_text_field( $_POST[ 'meta-text-1-url' ] ) );
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-1-1' ] ) ) {
		update_post_meta( $post_id, 'meta-text-1-1', sanitize_text_field( $_POST[ 'meta-text-1-1' ] ) );
	}
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-1-2' ] ) ) {
		update_post_meta( $post_id, 'meta-text-1-2', sanitize_text_field( $_POST[ 'meta-text-1-2' ] ) );
	}
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-1-action' ] ) ) {
		update_post_meta( $post_id, 'meta-text-1-action', sanitize_text_field( $_POST[ 'meta-text-1-action' ] ) );
	}

	// Checks for input and saves if needed
	if( isset( $_POST[ 'meta-color-1' ] ) ) {
		update_post_meta( $post_id, 'meta-color-1', $_POST[ 'meta-color-1' ] );
	}
	
	// BOX 2
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-2-url' ] ) ) {
		update_post_meta( $post_id, 'meta-text-2-url', sanitize_text_field( $_POST[ 'meta-text-2-url' ] ) );
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-2-1' ] ) ) {
		update_post_meta( $post_id, 'meta-text-2-1', sanitize_text_field( $_POST[ 'meta-text-2-1' ] ) );
	}
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-2-2' ] ) ) {
		update_post_meta( $post_id, 'meta-text-2-2', sanitize_text_field( $_POST[ 'meta-text-2-2' ] ) );
	}
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-2-action' ] ) ) {
		update_post_meta( $post_id, 'meta-text-2-action', sanitize_text_field( $_POST[ 'meta-text-2-action' ] ) );
	}

	// Checks for input and saves if needed
	if( isset( $_POST[ 'meta-color-2' ] ) ) {
		update_post_meta( $post_id, 'meta-color-2', $_POST[ 'meta-color-2' ] );
	}
	
	// BOX 3
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-3-url' ] ) ) {
		update_post_meta( $post_id, 'meta-text-3-url', sanitize_text_field( $_POST[ 'meta-text-3-url' ] ) );
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-3-1' ] ) ) {
		update_post_meta( $post_id, 'meta-text-3-1', sanitize_text_field( $_POST[ 'meta-text-3-1' ] ) );
	}
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-3-2' ] ) ) {
		update_post_meta( $post_id, 'meta-text-3-2', sanitize_text_field( $_POST[ 'meta-text-3-2' ] ) );
	}
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-text-3-action' ] ) ) {
		update_post_meta( $post_id, 'meta-text-3-action', sanitize_text_field( $_POST[ 'meta-text-3-action' ] ) );
	}

	// Checks for input and saves if needed
	if( isset( $_POST[ 'meta-color-3' ] ) ) {
		update_post_meta( $post_id, 'meta-color-3', $_POST[ 'meta-color-3' ] );
	}

}
add_action( 'save_post', 'prfx_meta_save' );


/**
 * Adds the meta box stylesheet when appropriate
 */
function prfx_admin_styles(){
	global $typenow;
	if( $typenow == 'page' ) {
		wp_enqueue_style( 'prfx_meta_box_styles', plugin_dir_url( __FILE__ ) . 'meta-box-styles.css' );
	}
}
add_action( 'admin_print_styles', 'prfx_admin_styles' );


/**
 * Loads the color picker javascript
 */
function prfx_color_enqueue() {
	global $typenow;
	if( $typenow == 'page' ) {
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'meta-box-color-js', plugin_dir_url( __FILE__ ) . 'meta-box-color.js', array( 'wp-color-picker' ) );
	}
}
add_action( 'admin_enqueue_scripts', 'prfx_color_enqueue' );