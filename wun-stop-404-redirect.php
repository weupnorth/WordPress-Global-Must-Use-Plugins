<?php

/**
 * Stop Redirect Canonical from trying to redirect 404 errors.
 * @link https://core.trac.wordpress.org/ticket/16557
 **/
function stop_404_guessing( $url ) {
	return ( is_404() ) ? false : $url;
}
add_filter( 'redirect_canonical', 'stop_404_guessing' );