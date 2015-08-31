<?php

/*
     Plugin Name: Display Alias
     Plugin URI: https://github.com/genx7up/yourls-display-alias
     Description: It enables to use a different alias domain for the shortned url
     Version: 0.1
     Author: G-Man
     Author URI: https://github.com/genx7up/
*/
     
yourls_add_filter( 'yourls_link', 'display_alias' );

function display_alias ($link, $keyword) {
  $link = YOURLS_ALIAS . '/' . yourls_sanitize_keyword( $keyword );
	return $link;
}

?>
