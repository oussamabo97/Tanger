<?php
/**
 * Customizer Control: toggle.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Toggle control (modified checkbox).
 */
class Travel_Joy_Customizer_Control_Toggle extends Travel_Joy_Customizer_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-toggle';

	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
		?>
		<label for="toggle_{{ data.id }}" style="display: flex; flex-wrap: wrap; align-items: center;">
		<input {{{ data.inputAttrs }}} name="toggle_{{ data.id }}" id="toggle_{{ data.id }}" type="checkbox" value="{{ data.value }}" {{{ data.link }}}<# if ( '1' == data.value ) { #> checked<# } #> hidden />
			<span class="customize-control-title">
				{{{ data.label }}}
			</span>
			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>
			
			<span class="switch"></span>
		</label>
		<?php
	}
}
