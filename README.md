# KE-SMTP-Mailer-WordPress-Plugin

WordPress plugin to configure WP's phpmailer function to send all email through SMTP

## Installation Instructions

Setup your SMTP configuration in wp-config.php:

```
define( 'KE_SMTP_HOST',   'smtp.example.com' );    // The hostname of the mail server
define( 'KE_SMTP_PORT',   '25' );                  // SMTP port number - likely to be 25, 465 or 587
define( 'KE_SMTP_SECURE', 'tls' );                 // Encryption system to use - ssl or tls
define( 'KE_SMTP_AUTH',    true );                 // Use SMTP authentication (true|false)
define( 'KE_SMTP_USER',   'user@example.com' );    // Username to use for SMTP authentication
define( 'KE_SMTP_PASS',   'smtp password' );       // Password to use for SMTP authentication
define( 'KE_SMTP_DEBUG',   0 );                    // for debugging purposes only set to 1 or 2
```
