<?php

form_security_validate( 'plugin_MantisBTDarkTheme_config_edit' );

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );


// dark_theme_option

if (gpc_isset('dark_theme_option')) {
	plugin_config_set( 'dark_theme_option', gpc_get_string('dark_theme_option') );
}


form_security_purge( 'plugin_MantisBTDarkTheme_config_edit' );

print_successful_redirect( plugin_page( 'config', true ) );
