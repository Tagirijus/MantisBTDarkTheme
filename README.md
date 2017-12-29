# Mantis Bugtracker Dark Theme

## About

I wanted a dark theme for MantisBT. While it's not enough to just add a `default.css` into the `config_inc.php` variable *$g_css_include_file*, I tried to write a plugin, which hopefully will replace the needed CSS classes soon. So: plugin is still in development (still learning how to write MantisBT plugins properly).

## What? Why?

For example the `ace.css` stylesheet has many *!important* rules. I managed to replace all the default css files manually and then add my own `DarkTheme.css` to work correctly (feel free to do it manually as well, if you'd like to have a dark MantisBT theme already). Unfortunately this has to be done manually each time you update or install MantisBT and it is probably not the cleanest solution. That's why I wanted to achieve this replacement with a plugin. Still learning how to do it, though.