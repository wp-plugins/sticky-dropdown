<?php
/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   Sticky_Dropdown
 * @author    engrmostafijur <engr.mostafijur@gmail.com>
 * @license   GPL-2.0+
 * @link      http://pixelsolution4it.com
 * @copyright 2014 engrmostafijur
 */

// Get Sticky Header options
$pixl_Sticky_Dropdown_settings = get_option( 'pixl_Sticky_Dropdown' );

// Check if there is a logo image
if ( '' != $pixl_Sticky_Dropdown_settings['logo'] ) :
	$pixl_Sticky_Dropdown_title = '<img src="' . esc_attr( $pixl_Sticky_Dropdown_settings['logo'] ) . '" alt="' . esc_attr( get_bloginfo( 'description' ) ) . '" />';
else :
	$pixl_Sticky_Dropdown_title = get_bloginfo( 'name' );
endif;
?>
<div id="pixl-sticky-header">
	<div id="pixl-sticky-header-inner">
		<div id="pixl-sticky-header-title">
			<a href="<?php echo bloginfo( 'url' ); ?>" title="<?php bloginfo( 'description' ); ?>"><?php echo $pixl_Sticky_Dropdown_title; ?></a>
		</div>
		
		<?php if ( isset( $pixl_Sticky_Dropdown_settings['menu' ] ) ) :
			$menu_args = array(
				'menu'			=> $pixl_Sticky_Dropdown_settings['menu' ],
				'depth'			=> 4,
				'menu_id'		=> 'pixl-sticky-header-menu',
				'container'		=> '',
				'fallback_cb'	=> ''
			);
			wp_nav_menu( $menu_args );
		endif; ?>
	</div><!-- #pixl-sticky-header-inner -->
</div><!-- #pixl-sticky-header -->