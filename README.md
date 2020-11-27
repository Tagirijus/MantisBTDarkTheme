# Mantis Bugtracker Dark Theme

![MantisBTDarkTheme Screenshot](files/MantisBTDarkTheme_Screenshot.png)

## About

I wanted a dark theme for MantisBT. While it's not enough to just add a `default.css` into the `config_inc.php` variable *$g_css_include_file*, I tried to write a plugin, which replaces the needed CSS classes. Maybe there are still some ugly colors or things - I'm no pro here. (-;

## Installation

Upload the whole folder into your `plugins/` folder in the mantis installation so that you e.g. have `MANTIS_INSTALLATION/plugins/MantisBTDarkTheme/MantisBTDarkTheme.php`. After that the plugin should show up on the `manage_plugin_page.php` page in the mantis settings. There you can simply install it to activate it.

## Your colors

Basically you could now add your own themes by copying the `dark_theme_....sass` and compile it to a CSS. Assign the variable `$g_dark_theme_options` in the plugins config.php like so:

```php
$g_dark_theme_options = [
    'tagi_default' => 'Tagi (default)',
    'tagi_darker' => 'Tagi (darker)',
    'orange' => 'Orange',
    'ocean' => 'Ocean',
    'your_name_here' => 'You readable style name'
];
```

ATTENTION: next plugin update will overwrite this all again ... maybe I will come up with a more dynamic solution at some point. It's rather hard structured to me ... /-:

And the style sheet file should follow this pattern: `dark_theme_NAME.sass|css`. Feel free to ask. Maybe I can help.

## Changelog

You can view the changelog [here: CHANGELOG.md](CHANGELOG.md).
