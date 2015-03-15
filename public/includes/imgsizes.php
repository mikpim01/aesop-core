<?php
/**
<<<<<<< HEAD
 * 	Add image sizes for various components
=======
 *  Add image sizes for various components
>>>>>>> release/1.5.1
 *
 * @since    1.0.0
 */
class AesopComponentImageSizes {

	public function __construct() {

<<<<<<< HEAD
		add_filter( 'init',		array($this,'img_sizes') );
=======
		add_filter( 'init',  array( $this, 'img_sizes' ) );
>>>>>>> release/1.5.1
	}

	public function img_sizes() {

		add_image_size( 'aesop-cover-img',  1250, 9999 );      // Cover & Chapter Components
		add_image_size( 'aesop-tiny-cover',  400, 9999 );      // Index Covers
		add_image_size( 'aesop-component',  1250, 9999 );      // Parallax & Image Components
		add_image_size( 'aesop-character',  200,  200, true ); // Character Component
		add_image_size( 'aesop-collection', 300,  300, true ); // Collection Component
		add_image_size( 'aesop-grid-image', 400,  9999 ); // Collection Component
	}
}

new AesopComponentImageSizes;