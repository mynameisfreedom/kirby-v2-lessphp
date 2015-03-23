# Lessphp Plugin for Kirby 2

This is a preprocessor for Less files. Built using the [lessphp library](https://github.com/oyejorge/less.php) by Josh Schmidt and [lessphp plugin for Kirby 1](https://github.com/janstieler/kirby-lessphp) by Jan Stieler. This plugin will automatically process Less files when changed.

## Installation

1. Copy folder ‘lessphp’ inside ‘plugins’ to Kirby’s plugin folder.
2. Copy file ‘less.php’ inside ‘snippet’ to Kirby’s snippet folder.
3. Call the snippet with <?php snippet('less') ?> in your HTML head.
4. Create a folder ‘less’ inside Kirby’s assets folder.
5. Create a file ‘style.less’ and place it inside ‘assets/less’.
6. Make sure 'css/style.css’ exists inside Kirby's assets folder.

## Compatibility

This Kirby 2 plugin is compatible with Less 1.7.
