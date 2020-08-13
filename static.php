<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( ! is_admin() ) {
	global $template;
	/**
	 * @var FW_Extension_Integrations $integrations
	 */
	$integrations = fw()->extensions->get( 'integrations' );

	if ( is_singular( $integrations->get_post_type_name() ) ) {
		wp_enqueue_style(
			'fw-extension-' . $integrations->get_name() . '-nivo-default',
			$integrations->locate_css_URI( 'NivoSlider/themes/default/default' ),
			array(),
			$integrations->manifest->get_version()
		);

		wp_enqueue_style(
			'fw-extension-' . $integrations->get_name() . '-nivo-dark',
			$integrations->locate_css_URI( 'NivoSlider/themes/dark/dark' ),
			array(),
			$integrations->manifest->get_version()
		);

		wp_enqueue_style(
			'fw-extension-' . $integrations->get_name() . '-nivo-slider',
			$integrations->locate_css_URI( 'nivo-slider' ),
			array(),
			$integrations->manifest->get_version()
		);

		wp_enqueue_script(
			'fw-extension-' . $integrations->get_name() . '-nivoslider',
			$integrations->locate_js_URI( 'jquery.nivo.slider' ),
			array( 'jquery' ),
			$integrations->manifest->get_version(),
			true
		);

		wp_enqueue_script(
			'fw-extension-' . $integrations->get_name() . '-script',
			$integrations->locate_js_URI( 'projects-script' ),
			array( 'fw-extension-' . $integrations->get_name() . '-nivoslider' ),
			$integrations->manifest->get_version(),
			true
		);
	}
}



