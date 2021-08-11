<?php
/**
 * SVIRegister File
 *
 * @package    show-variations-image
 * @category   class
 * @author     BRPCreative
 * @since      1.0.0
 * @copyright  Copyright (c) 2021, BRPCreative.
 */

namespace SVI\Inc\Classes;

// Security Note: Blocks direct access to the PHP files.
\defined( 'ABSPATH' ) || die;

use SVI\Inc\Classes\Utilities\EnqueueAssets;

/**
 * GATRegister class
 */
class SVIRegister {

	/**
	 * The __construct function
	 *
	 * @return void
	 */
	public function __construct() {
		$this->svi__show_variations_image_init();
	}

	/**
	 * The svi__show_variations_image_init function.
	 *
	 * @return void
	 */
	public function svi__show_variations_image_init() {

		require_once \_SVI_PLUGIN_PATH . 'inc/classes/utilities/class-enqueueassets.php';
		// Add styles and scripts.
		new EnqueueAssets();
	}
}
