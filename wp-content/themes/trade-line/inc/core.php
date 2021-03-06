<?php
/**
 * Core functions.
 *
 * @package Trade_Line
 */

if ( ! function_exists( 'trade_line_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function trade_line_get_option( $key = '' ) {

		global $trade_line_default_options;
		if ( empty( $key ) ) {
			return;
		}

		$default = ( isset( $trade_line_default_options[ $key ] ) ) ? $trade_line_default_options[ $key ] : '';
		$theme_options = get_theme_mod( 'theme_options', $trade_line_default_options );
		$theme_options = array_merge( $trade_line_default_options, $theme_options );
		$value = '';
		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}
		return $value;

	}

endif;

if ( ! function_exists( 'trade_line_get_options' ) ) :

	/**
	 * Get all theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Theme options.
	 */
	function trade_line_get_options() {

		$value = array();
		$value = get_theme_mod( 'theme_options' );
		return $value;

	}

endif;
