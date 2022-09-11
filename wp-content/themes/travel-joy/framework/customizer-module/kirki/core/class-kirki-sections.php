<?php
/**
 * Additional tweaks for sections.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.17
 */

/**
 * Additional tweaks for sections.
 */
class Travel_Joy_Customizer_Sections {

	/**
	 * The object constructor.
	 *
	 * @access public
	 * @since 3.0.17
	 */
	public function __construct() {
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'outer_sections_css' ) );
	}

	/**
	 * Generate CSS for the outer sections.
	 * These are by default hidden, we need to expose them.
	 *
	 * @since 3.0.17
	 * @return void
	 */
	public function outer_sections_css() {
		echo '<style>';
		$css = '';
		if ( ! empty( Travel_Joy_Customizer::$sections ) ) {
			foreach ( Travel_Joy_Customizer::$sections as $section_args ) {
				if ( isset( $section_args['id'] ) && isset( $section_args['type'] ) && 'outer' === $section_args['type'] || 'kirki-outer' === $section_args['type'] ) {
					echo '#customize-theme-controls li#accordion-section-' . esc_html( $section_args['id'] ) . '{display:list-item!important;}';
				}
			}
		}
		echo '</style>';
	}
}
