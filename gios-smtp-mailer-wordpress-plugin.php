<?php
/**
 * Plugin Name: GIOS SMTP Mailer
 * Description: Configure WP's phpmailer function to send all email through SMTP
 * Author:
 * Author URI: https://github.com/gios-asu/gios-smtp-mailer-wordpress-plugin
 * Version: 1.0
 * Plugin URI: https://github.com/gios-asu/gios-smtp-mailer-wordpress-plugin
 */

// Only allow WordPress access
if ( ! function_exists( 'add_filter' ) ) {
  header( 'Status: 403 Forbidden' );
  header( 'HTTP/1.1 403 Forbidden' );
  exit();
}

function configure_smtp_email( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->SMTPAuth   = true;
	$phpmailer->SMTPSecure = SMTP_SECURE;
	$phpmailer->Host       = SMTP_HOST;
	$phpmailer->Port       = SMTP_PORT;
	$phpmailer->Username   = SMTP_USER;
	$phpmailer->Password   = SMTP_PASS;
	// $phpmailer->From       = SMTP_FROM;
	// $phpmailer->FromName   = SMTP_NAME;
}

add_action( 'phpmailer_init', 'configure_smtp_email' );

