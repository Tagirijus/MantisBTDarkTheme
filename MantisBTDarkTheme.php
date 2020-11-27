<?php

class MantisBTDarkThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = plugin_lang_get( 'title' );
    $this->description = plugin_lang_get( 'description' );
    $this->page = 'config';

    $this->version     = '1.1.0';
    $this->requires    = array(
      'MantisCore'       => '2.0.0',
    );

    $this->author      = 'Manuel Senfft';
    $this->contact     = 'info@tagirijus.de';
    $this->url         = 'http://www.tagirijus.de';
  }

  function hooks() {
    $hooks = parent::hooks();

    $hooks['EVENT_LAYOUT_RESOURCES'] = 'add_css';

    return $hooks;
  }

  function config( ) {
    return array(
      'dark_theme_option' => 'tagi_default',
    );
  }

  function add_css($p_event) {
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('dark_theme_' . plugin_config_get( 'dark_theme_option' ) . '.css') . '" />' . "\n";
  }

}