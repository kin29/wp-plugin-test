<?php
/**
 * Plugin Name: AdminMessage Maker
 * Plugin URI: https://github.com/kin29/wp-plugin-test/tree/master/admin-header-message
 * Description: You can set your like message in admin-page header.
 * Version: 1.0.0
 * Author: kin29
 * Author URI: https://kin29.info
 * License: GPLv2
 */
/*  Copyright 2018 ki29 (email : kin29.com@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function addTest($x){
//$x='admin_bar_menu'
 $x->add_menu( array(
    'id' => 'my-menu',
    'title' => 'hello, kin29!'
  ) );
}
add_action('admin_bar_menu', 'addTest');
