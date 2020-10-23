<?php
defined( 'ABSPATH' ) or die( "you do not have acces to this page!" );

add_filter( 'cmplz_known_script_tags', 'cmplz_recaptcha_script' );
function cmplz_recaptcha_script( $tags ) {

	if (cmplz_get_value('block_recaptcha_service') === 'yes'){
		$tags[] = 'google.com/recaptcha';
		$tags[] = 'grecaptcha'; //contact form 7
		$tags[] = 'recaptcha.js';
		$tags[] = 'recaptcha/api';
		$tags[] = 'apis.google.com/js/platform.js';
  }
	return $tags;
}


add_filter( 'cmplz_known_iframe_tags', 'cmplz_recaptcha_iframetags' );
function cmplz_recaptcha_iframetags( $tags ) {
	if (cmplz_get_value('block_recaptcha_service') === 'yes'){
		$tags[] = 'google.com/recaptcha/';
	}
	return $tags;
}

add_filter( 'cmplz_placeholder_markers', 'cmplz_google_recaptcha_placeholder' );
function cmplz_google_recaptcha_placeholder( $tags ) {
	if (cmplz_get_value('block_recaptcha_service') === 'yes'){
		$tags['google-recaptcha'][] = 'recaptcha-invisible'; //forminator
		$tags['google-recaptcha'][] = 'g-recaptcha'; //ultimate member
	}
	return $tags;
}

/**
 * Add some custom css for the placeholder
 */

add_action( 'wp_footer', 'cmplz_recaptcha_css' );
function cmplz_recaptcha_css() {
	?>
	<style>
		.cmplz-blocked-content-container.recaptcha-invisible,
		.cmplz-blocked-content-container.g-recaptcha {
			max-width: initial !important;
			height: 70px !important
		}

		@media only screen and (max-width: 400px) {
			.cmplz-blocked-content-container.recaptcha-invisible,
			.cmplz-blocked-content-container.g-recaptcha {
				height: 100px !important
			}
		}

		.cmplz-blocked-content-container.recaptcha-invisible .cmplz-blocked-content-notice,
		.cmplz-blocked-content-container.g-recaptcha .cmplz-blocked-content-notice {
			top: 2px
		}
	</style>
	<?php
}
