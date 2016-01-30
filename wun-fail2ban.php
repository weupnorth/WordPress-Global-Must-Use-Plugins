<?php

/**
 * Adding 403 status header to failed WordPress logins.
 *
 * @link    https://kovshenin.com/2014/fail2ban-wordpress-nginx/
 * @link 	https://en.wikipedia.org/wiki/HTTP_403
 */

function my_login_failed_403() {
    status_header( 403 );
}

add_action( 'wp_login_failed', 'my_login_failed_403' );