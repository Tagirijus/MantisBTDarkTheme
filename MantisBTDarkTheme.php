<?php

class MantisBTDarkThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'MantisBT Dark Theme';
    $this->description = 'A dark theme for MantisBT.';

    $this->version     = '0.1';
    $this->requires    = array(
      'MantisCore'       => '2.5.1',
    );

    $this->author      = 'Manuel Senfft';
    $this->contact     = 'info@tagirijus.de';
    $this->url         = 'http://www.tagirijus.de';
  }

  function hooks() {
    return array(
        'EVENT_LAYOUT_RESOURCES' => 'add_css'
    );
  }

  function add_css($p_event) {
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('DarkTheme.css') . '" />' . "\n";
  }

}