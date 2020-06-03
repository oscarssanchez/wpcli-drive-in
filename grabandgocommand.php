<?php
/**
 * Plugin Name: Grab And Go Command
 * Plugin URI:
 * Description: WP CLI Command Only.
 * Version: 0.0.1
 * Author: grabandgoauthor
 * Author URI:
 * License:
 */

namespace grabandgonamespace;

use \WP_CLI as WP_CLI;
use \WP_CLI_Command as WP_CLI_Command;

if ( ! defined( 'WP_CLI') ) {
	return;
}

/**
 * The Command Class
 */
class command extends WP_CLI_Command {
	public function hello_world() {
		WP_CLI::success( 'I am officially born!' );
	}
}

WP_CLI::add_command( 'grabandgocommand', __NAMESPACE__ . '\Command' );


