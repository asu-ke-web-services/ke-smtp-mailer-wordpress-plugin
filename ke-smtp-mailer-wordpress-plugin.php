<?php
/**
 * Plugin Name: KE SMTP Mailer
 * Description: Configure WP's phpmailer() function to send all email through SMTP
 * Version: 1.0
 * Plugin URI: https://github.com/asu-ke-web-services/gios-smtp-mailer-wordpress-plugin
 *
 * GitHub Plugin URI: https://github.com/asu-ke-web-services/ke-smtp-mailer-wordpress-plugin
 */

// Only allow WordPress access
if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

function configure_smtp_email( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->SMTPAuth   = KE_SMTP_AUTH;
	$phpmailer->SMTPSecure = KE_SMTP_SECURE;
	$phpmailer->Host       = KE_SMTP_HOST;
	$phpmailer->Port       = KE_SMTP_PORT;
	$phpmailer->Username   = KE_SMTP_USER;
	$phpmailer->Password   = KE_SMTP_PASS;
	// $phpmailer->From       = SMTP_FROM;
	// $phpmailer->FromName   = SMTP_NAME;
}
add_action( 'phpmailer_init', 'configure_smtp_email' );

