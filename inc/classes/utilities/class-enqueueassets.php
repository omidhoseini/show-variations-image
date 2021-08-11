<?php
/**
 * EnqueueAssets File
 *
 * @package    show-variations-image
 * @category   class
 * @author     BRPCreative
 * @since      1.0.0
 * @copyright  Copyright (c) 2021, BRPCreative.
 */

namespace SVI\Inc\Classes\Utilities;

// Security Note: Blocks direct access to the PHP files.
\defined( 'ABSPATH' ) || die;

/**
 * EnqueueAssets class
 */
class EnqueueAssets {

	/**
	 * The __constructor function.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __construct() {

		// Add styles in PRODUCT page via enqueue in wp_enqueue_scripts hook.
		\add_action( 'wp_enqueue_scripts', array( $this, 'svi__show_variations_image_script' ) );
	}

	/**
	 * The svi__show_variations_image_script function.
	 *
	 * Single product page script.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function svi__show_variations_image_script() {

		// Include gat-tailwind file.
		wp_register_script(
			'svi-show-variations-image',
			\_SVI_PLUGIN_URL . 'inc/js/show-var-img-on-single-attr.js',
			array( 'jquery' ),
			\_SVI_VERSION,
			true
		);
		wp_enqueue_script( 'svi-show-variations-image' );
	}
}
