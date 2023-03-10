<?php
/**
 * @package M150Stocks
 */
/*
Plugin Name: M150Stocks
Plugin URI: https://www.youtube.com/watch?v=dQw4w9WgXcQ
Description: A WordPress plugin showing stock and news information. For IMS Modularbeit M150
Version: 1.0.0
Author: T. Aeschbach, C. Foley, Y. Schüpbach, D. Trisheski
Author URI: https://www.youtube.com/watch?v=dQw4w9WgXcQ
Licence: GPLv2 or Later
Text Domain: M150Stocks
*/

/*
This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public Licence as published by the Free Software
Foundation; either version 2 of the Licence, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public Licence for more details.

A copy of the GNU General Public Licence is included as an appendix to the GNOME
Users Guide. You may also obtain a copy of the GNU General Public Licence from the
Free Software Foundation by visiting their Web site or by writing to

Free Software Foundation, Inc. 51 Franklin Street, Fifth FloorBoston, MA02110-1301USA
*/

defined('ABSPATH') or die('haha ur dead');

class M150Stocks
{
	private Shortcodes $shortcodes;

	public function __construct(){
		include_once 'shortcodes.php';
		$this->shortcodes = new Shortcodes();
	}

	function activate() {
		//generate CPT
		//flush rewrite rules
	}

	function register() {
		add_shortcode('testShortcode', array($this->shortcodes, 'testShortcode'));
	}

	function deactivate() {
		//flush rewrite rules
	}

	function uninstall() {
		//delete CPT
		//delete all the plugin data from the DB
	}
}

if (class_exists('M150Stocks')){
	$M150Stocks = new M150Stocks();
	$M150Stocks->register();
}

//activation
register_activation_hook(__FILE__, array($M150Stocks, 'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($M150Stocks, 'deactivate'));
