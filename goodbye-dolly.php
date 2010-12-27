<?php
/**
 * Goodbye Dolly
 *
 * Copyright 2010 by hakre <hakre.wordpress.com>, some rights reserved.
 *
 * Wordpress Plugin Header:
 *
 *   Plugin Name:    Goodbye Dolly
 *   Plugin URI:     http://hakre.wordpress.com/plugins/goodbye-dolly/
 *   Description:    Say Hello, say Goodbye - to Dolly
 *   Version:        0.0.0
 *   Stable tag:     1.0.0
 *   Min WP Version: 2.9
 *   Author:         hakre
 *   Author URI:     http://hakre.wordpress.com/
 *   Tags:           Plugin, Administration, Support, Hello Dolly, Hello, Goodbye, Dolly
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

return goodbyeDollyPlugin::bootstrap();

class goodbyeDollyPlugin {
	/** @var goodbyeDollyPlugin */
	static $instance;
	final public static function bootstrap() {
		if (null==goodbyeDollyPlugin::$instance)
			goodbyeDollyPlugin::$instance = new goodbyeDollyPlugin();
		return goodbyeDollyPlugin::$instance;
	}
	private function __construct() {
	}
}

#EOF;