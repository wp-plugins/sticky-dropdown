<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Sticky_Dropdown
 * @author    ThematoSoup <contact@thematosoup.com>
 * @license   GPL-2.0+
 * @link      http://thematosoup.com
 * @copyright 2013 ThematoSoup
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Delete plugin settings
delete_option( 'pixl_Sticky_Dropdown' );