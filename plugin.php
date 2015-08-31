<?php

yourls_add_filter( 'yourls_link', 'display_alias' );

function display_alias () {
  $link = YOURLS_ALIAS . '/' . yourls_sanitize_keyword( $keyword );
	return $link;
}

?>
