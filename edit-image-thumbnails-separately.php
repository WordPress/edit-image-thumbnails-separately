<?php
/**
 * Edit Image Thumbnails Separately
 *
 * Plugin Name: Edit Image Thumbnails Separately
 * Plugin URI:  https://wordpress.org/plugins/
 * Description: Re-enables editing of the thumbnail size of images separately.
 * Version:     1.0.0
 * Author:      WordPress Core Contributors
 * Author URI:  https://wordpress.org
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Requires at least: 6.3
 * Requires PHP: 7.0.0
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

add_filter( 'image_edit_thumbnails_separately', '__return_true' );
