<?php

//enqueue javascript for theme
drupal_add_js(path_to_theme() . '/node_modules/jquery/dist/jquery.min.js', array(
  'type' => 'file',
  'group' => JS_THEME,
));

drupal_add_js(path_to_theme() . '/node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', array(
  'type' => 'file',
  'group' => JS_THEME,
));


drupal_add_js(path_to_theme() . '/assets/js/carousel.js', array(
  'type' => 'file',
  'group' => JS_THEME,
));

drupal_add_js(path_to_theme() . '/assets/js/theme.js', array(
  'type' => 'file',
  'group' => JS_THEME,
));