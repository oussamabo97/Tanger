<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package lightblogify
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses lightblogify_header_style()
 */
function lightblogify_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'lightblogify_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'flex-height'            => true,
				'default-image'			=> '%s/img/bg-img.jpg',
		'wp-head-callback'       => 'lightblogify_header_style',
		) ) );
		register_default_headers( array(
		'header-bg' => array(
			'url'           => '%s/img/bg-img.jpg',
			'thumbnail_url' => '%s/img/bg-img.jpg',
			'description'   => _x( 'Default', 'Default header image', 'lightblogify' )
			),	
		) );

}
add_action( 'after_setup_theme', 'lightblogify_custom_header_setup' );

if ( ! function_exists( 'lightblogify_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see lightblogify_custom_header_setup().
	 */
function lightblogify_header_style() {
	$header_text_color = get_header_textcolor();
	$header_image = get_header_image();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ){
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
		<style type="text/css">


	.site-title a,
		.site-description,
		.logofont {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}

	<?php if ( ! display_header_text() ) : ?>
	a.logofont {
		position: absolute;
		clip: rect(1px, 1px, 1px, 1px);
		display:none;
	}
	.center-main-menu {
		width: 100%;
		max-width: 100%;
	}
	.primary-menu .pmenu {
		text-align: center;
	}
	<?php endif; ?>

		<?php header_image(); ?>"
		<?php
		if ( ! display_header_text() ) :
			?>
		a.logofont{
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
			display:none;
		}
		<?php
		else :
			?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
		<?php endif; ?>
		</style>
		<?php
	}
	endif;
