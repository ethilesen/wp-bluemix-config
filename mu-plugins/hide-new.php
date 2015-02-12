<?php

function hide_add($hook){
  if($hook == 'theme-install.php' || $hook =='plugin-install.php'){
    wp_enqueue_script( 'hide-theme', plugins_url('hide.js', __FILE__), 'jquery');
  }
  else
    wp_enqueue_script( 'add-logo', plugins_url('logo.js', __FILE__), 'jquery');
}
add_action('admin_enqueue_scripts', 'hide_add');
