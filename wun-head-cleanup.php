<?php

/**
 * Removing WordPress version from HEAD and RSS
 *
 */

function disable_version() {
   return '';
}
add_filter('the_generator','disable_version');
remove_action('wp_head', 'wp_generator');

