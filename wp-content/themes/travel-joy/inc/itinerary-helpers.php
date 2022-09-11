<?php

/**
 * As many pricing and trip related functions from WP Travel 4.4.0 and later are deprecated,
 * we are making some backward compatible helper functions for the theme.
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Return All Pricing. Use to display regular listing.
 *
 * @param array $trip_id Current Trip ID.
 */
function travel_joy_itinerary_get_trip_pricing_option( $trip_id = '' ) {
	if ( function_exists( 'wptravel_get_trip_pricing_option' ) ) {
		return wptravel_get_trip_pricing_option( $trip_id );
	} elseif ( function_exists( 'wp_travel_get_trip_pricing_option' ) ) {
		return wp_travel_get_trip_pricing_option( $trip_id );
	}
}

/**
 * Get Price Per text.
 *
 * @param int $post_id Current post id.
 */
function travel_joy_itinerary_get_price_per_text( $trip_id, $price_key = '', $return_key = false, $category_id = null ) {
	if ( function_exists( 'wptravel_get_price_per_text' ) ) {
		return wptravel_get_price_per_text( $trip_id, $price_key, $return_key, $category_id );
	} elseif ( function_exists( 'wp_travel_get_price_per_text' ) ) {
		return wp_travel_get_price_per_text( $trip_id, $price_key, $return_key, $category_id );
	}
}

/**
 * Get post thumbnail.
 *
 * @param  int    $post_id Post ID.
 * @param  string $size    Image size.
 * @return string          Image tag.
 */
function travel_joy_itinerary_get_post_thumbnail( $post_id, $size = 'wp_travel_thumbnail' ) {
	if ( function_exists( 'wptravel_get_post_thumbnail' ) ) {
		return wptravel_get_post_thumbnail( $post_id, $size );
	} elseif ( function_exists( 'wp_travel_get_post_thumbnail' ) ) {
		return wp_travel_get_post_thumbnail( $post_id, $size );
	}
}

/**
 * Currency position with price
 */
function travel_joy_itinerary_get_formated_price_currency( float $price, $regular_price = false, $price_key = '', $post_id = null ) {
	if ( function_exists( 'wptravel_get_formated_price_currency' ) ) {
		return wptravel_get_formated_price_currency( $price, $regular_price, $price_key, $post_id );
	} elseif ( function_exists( 'wp_travel_get_formated_price_currency' ) ) {
		return wp_travel_get_formated_price_currency( $price, $regular_price, $price_key, $post_id );
	}
}

/**
 * Return All Settings of WP travel.
 */
function travel_joy_itinerary_get_settings() {
	if ( function_exists( 'wptravel_get_settings' ) ) {
		return wptravel_get_settings();
	} elseif ( function_exists( 'wp_travel_get_settings' ) ) {
		return wp_travel_get_settings();
	}
}

/**
 * Get the average rating of product. This is calculated once and stored in postmeta.
 */
function travel_joy_itinerary_get_average_rating( $post_id = null ) {
	if ( function_exists( 'wptravel_get_average_rating' ) ) {
		return wptravel_get_average_rating( $post_id );
	} elseif ( function_exists( 'wp_travel_get_average_rating' ) ) {
		return wp_travel_get_average_rating( $post_id );
	}
}

/**
 * Function to get currency symbol or name.
 */
function travel_joy_itinerary_get_currency_symbol( $currency_code = null ) {
	if ( function_exists( 'wptravel_get_currency_symbol' ) ) {
		return wptravel_get_currency_symbol( $currency_code );
	} elseif ( function_exists( 'wp_travel_get_currency_symbol' ) ) {
		return wp_travel_get_currency_symbol( $currency_code );
	}
}

/**
 * Function to get minimum pricing id.
 */
function travel_joy_itinerary_get_min_pricing_id( $trip_id ) {
	if ( function_exists( 'wptravel_get_min_pricing_id' ) ) {
		return wptravel_get_min_pricing_id( $trip_id );
	} elseif ( function_exists( 'wp_travel_get_min_pricing_id' ) ) {
		return wp_travel_get_min_pricing_id( $trip_id );
	}
}

/**
 * Get Template Part.
 *
 * @param  String $slug Name of slug.
 * @param  string $name Name of file / template.
 */
function travel_joy_itinerary_get_template_part( $slug, $name = '' ) {
	if ( function_exists( 'wptravel_get_template_part' ) ) {
		return wptravel_get_template_part( $slug, $name );
	} elseif ( function_exists( 'wp_travel_get_template_part' ) ) {
		return wp_travel_get_template_part( $slug, $name );
	}
}

/**
 * Get Pricing Options.
 *
 * @since 4.0.0
 */
function travel_joy_itinerary_get_trip_pricings_with_dates( $trip_id ) {
	if ( function_exists( 'wptravel_get_trip_pricings_with_dates' ) ) {
		return wptravel_get_trip_pricings_with_dates( $trip_id );
	} elseif ( function_exists( 'wp_travel_get_trip_pricings_with_dates' ) ) {
		return wp_travel_get_trip_pricings_with_dates( $trip_id );
	}
}

function travel_joy_itinerary_get_price( $trip_id, $is_regular_price = false, $pricing_id = '', $category_id = '', $price_key = '' ) {

	if ( method_exists( 'WP_Travel_Helpers_Pricings', 'get_price' ) ) {

		/**
		 * Support for WP Travel 4.4.0 and greater.
		 */
		$args = array(
			'trip_id'          => $trip_id,
			'is_regular_price' => $is_regular_price,
			'pricing_id'       => $pricing_id,
			'category_id'      => $category_id,
			'price_key'        => $price_key,
		);
		return WP_Travel_Helpers_Pricings::get_price( $args );
	} else {
		return wp_travel_get_price( $trip_id, $is_regular_price, $pricing_id, $category_id, $price_key );
	}
}

function travel_joy_itinerary_is_sale_enabled( $trip_id, $from_price_sale_enable = false, $pricing_id = '', $category_id = '', $price_key = '' ) {

	if ( method_exists( 'WP_Travel_Helpers_Trips', 'is_sale_enabled' ) ) {

		/**
		 * Support for WP Travel 4.4.0 and greater.
		 */
		$args = array(
			'trip_id'                => $trip_id,
			'from_price_sale_enable' => $from_price_sale_enable,
			'pricing_id'             => $pricing_id,
			'category_id'            => $category_id,
			'price_key'              => $price_key,
		);
		return WP_Travel_Helpers_Trips::is_sale_enabled( $args );
	} else {
		return wp_travel_is_enable_sale_price( $trip_id, $from_price_sale_enable, $pricing_id, $category_id, $price_key );
	}
}

function travel_joy_itinerary_get_sale_price( $trip_id = 0 ) {

	if ( ! $trip_id ) {
		return 0;
	}

	if ( method_exists( 'WP_Travel_Helpers_Pricings', 'get_price' ) ) {

		/**
		 * Support for WP Travel 4.4.0 and greater.
		 */
		$args = array(
			'trip_id'          => $trip_id,
			'is_regular_price' => true,
		);
		return WP_Travel_Helpers_Pricings::get_price( $args );
	} else {
		return wp_travel_get_trip_sale_price( $trip_id );
	}
}

function travel_joy_itinerary_is_cart_page() {
	if ( method_exists( 'WP_Travel', 'is_page' ) ) {

		/**
		 * Support for WP Travel 4.4.2 and greater.
		 */
		return WP_Travel::is_page( 'cart' );
	} else {
		return wp_travel_is_cart_page();
	}
}

function travel_joy_itinerary_is_checkout_page() {
	if ( method_exists( 'WP_Travel', 'is_page' ) ) {

		/**
		 * Support for WP Travel 4.4.2 and greater.
		 */
		return WP_Travel::is_page( 'checkout' );
	} else {
		return wp_travel_is_checkout_page();
	}
}

function travel_joy_itinerary_is_dashboard_page() {
	if ( method_exists( 'WP_Travel', 'is_page' ) ) {

		/**
		 * Support for WP Travel 4.4.2 and greater.
		 */
		return WP_Travel::is_page( 'dashboard' );
	} else {
		return wp_travel_is_dashboard_page();
	}
}


function travel_joy_itinerary_get_trip_dates( $trip_id ) {
	$enable_multi_depart_old = get_post_meta( $trip_id, 'wp_travel_enable_multiple_fixed_departue', true );

	$enable_multi_depart = $enable_multi_depart_old ? $enable_multi_depart_old : get_post_meta( $trip_id, 'wp_travel_fixed_departure', true );

	// Departures and durations.
	$trip_start_date      = get_post_meta( $trip_id, 'wp_travel_start_date', true ); // Fixed departure.
	$trip_end_date        = get_post_meta( $trip_id, 'wp_travel_end_date', true ); // Fixed departure.
	$fixed_departure      = ! empty( $trip_start_date ) && ! empty( $trip_end_date ) ? $trip_start_date . ' - ' . $trip_end_date : '';
	$trip_duration        = get_post_meta( $trip_id, 'wp_travel_trip_duration', true );
	$trip_duration        = ( $trip_duration ) ? $trip_duration : 0;
	$trip_duration_night  = get_post_meta( $trip_id, 'wp_travel_trip_duration_night', true );
	$trip_duration_night  = ( $trip_duration_night ) ? $trip_duration_night : 0;
	$trip_duration_string = sprintf(__('%1$d Days(s), %2$d Night(s)', 'travel-joy'), $trip_duration, $trip_duration_night); // phpcs:ignore

	$duration = ! empty( $fixed_departure ) ? $fixed_departure : $trip_duration_string;

	if ( ! function_exists( 'wptravel_get_trip_pricings_with_dates' ) ) {
		$pricings         = travel_joy_itinerary_get_trip_pricing_option( $trip_id );
		$pricing_data     = isset( $pricings['pricing_data'] ) ? $pricings['pricing_data'] : array();
		$trip_start_dates = ( 'yes' === $enable_multi_depart ) ? wp_list_pluck( $pricing_data, 'arrival_date' ) : array(); // Multiple departure.
	} else {
		$pricing_data      = travel_joy_itinerary_get_trip_pricings_with_dates( $trip_id );
		$start_dates_array = ( 'yes' === $enable_multi_depart ) ? wp_list_pluck( $pricing_data, 'date' ) : array(); // Multiple departure.
		$trip_start_dates  = ( 'yes' === $enable_multi_depart ) && ! empty( $start_dates_array ) ? wp_list_pluck( $start_dates_array, 'start_date' ) : array(); // Multiple departure.
		$trip_start_dates  = ( 'yes' === $enable_multi_depart ) && ! empty( $trip_start_dates ) ? array_unique( $trip_start_dates ) : array(); // Multiple departure.
	}

	return array(
		'trip_start_date'     => $trip_start_date,
		'trip_end_date'       => $trip_end_date,
		'fixed_departure'     => $fixed_departure,
		'trip_duration'       => $trip_duration,
		'trip_duration_night' => $trip_duration_night,
		'duration'            => $duration,
		'enable_multi_depart' => $enable_multi_depart,
		'trip_start_dates'    => $trip_start_dates,
	);
}
