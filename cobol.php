<?php  
/* 
Plugin Name: Cobol Press Post Types
Plugin URI: http://cobolpress.com/plugins/cobol-press-post-types/ 
Description: A Cobol Press Plugin for Creating and Managing Custom Post Types
Author: Cobol Press
Version: 1.0 
Author URI: http://cobolpress.com 
*/ 

/*
    Copyright 2012  Cobol Press  (email : support@cobolpress.com)

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

global $cobol_dbv;   

function cobol_install(){

	global $wpdb;
	$table_name = $wpdb->prefix . 'cobol_types'; 

if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	$sql = "CREATE TABLE IF NOT EXISTS " . $table_name . " (
	id INT(9) NOT NULL AUTO_INCREMENT,
	name VARCHAR(64),
	singularname VARCHAR(64),
	addnew VARCHAR(64),
	addnewitem VARCHAR(64),
	edititem VARCHAR(64),
	newitem VARCHAR(64),
	allitems VARCHAR(64),
	viewitem VARCHAR(64),
	searchitems VARCHAR(64),
	notfound VARCHAR(64),
	notfoundintrash VARCHAR(64),
	menuname VARCHAR(64),
	publicqueryable VARCHAR(5),
	queryvar VARCHAR(5),
	capability VARCHAR(64),
	hasarchive VARCHAR(5),
	hierarchical VARCHAR(5),
	menuposition INT(3),
	supports VARCHAR(255),
	supports2 VARCHAR(255),
	supports3 VARCHAR(255),
	supports4 VARCHAR(255),
	supports5 VARCHAR(255),
	created VARCHAR(255),
	UNIQUE KEY id (id)
	);";

	 require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	 dbDelta($sql);
}

	 /* Database Version for Updates */
	 $cobol_dbv = "1.0"; 
	 update_option('cobol_dbv', $cobol_dbv);

}
require 'load-cobol.php';

function cobol_uninstall(){

}
register_activation_hook(__FILE__,'cobol_install');
register_deactivation_hook(__FILE__,'cobol_uninstall');
