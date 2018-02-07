<?php
/**
 * Plugin Name: testPlugin
 * Description: Add testPlugin to your WordPress site.
 * Plugin URI: https://github.com/kin29/testPlugin
 * Author: kin29
 * Author URI: https://kin29.info
 * Version: 0.0.0
 * Text Domain: 
 * Domain Path: /languages/
 * License: GPLv2 or later
 */
//class mainClass
//{
  function addTest($x){
  //$x='admin_bar_menu'
   $x->add_menu( array(
      'id' => 'my-menu',
      'title' => 'hello, kin29!'
    ) );
  }
//}
//$mainObj = new mainClass();
add_action('admin_bar_menu', 'addTest');
