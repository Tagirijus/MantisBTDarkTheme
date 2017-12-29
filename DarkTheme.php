<?php

class DarkThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'Dark Theme';
    $this->description = 'A dark theme for MantisBT.';

    $this->version     = '1.0';
    $this->requires    = array(
      'MantisCore'       => '2.5.1',
    );

    $this->author      = 'Manuel Senfft';
    $this->contact     = 'info@tagirijus.de';
    $this->url         = 'http://www.tagirijus.de';
  }

  function init() {
    global $g_css_include_file;
    $g_css_include_file = plugin_file('default.css');
  }

}