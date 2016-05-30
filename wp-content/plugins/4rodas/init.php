<?php
/*
Plugin Name: Abril Rodas Esatoque
Description: Plugin Abril Controle de Estoque
Version: 1
Author: rafaelmilanib@gmail.com
Author URI: https://br.linkedin.com/in/raphaelbarbosa
*/

//menu items
add_action('admin_menu','abril_controle_estoque');
function abril_controle_estoque() {
	
	//this is the main item for the menu
	add_menu_page('Abril', //page title
	'Abril', //menu title
	'manage_options', //capabilities
	'estoque_list', //menu slug
	'estoque_list' //function
	);
	
	//this is a submenu
	add_submenu_page('estoque_list', //parent slug
	'Adicionar Novo Item', //page title
	'Adicionar Novo', //menu title
	'manage_options', //capability
	'estoque_create', //menu slug
	'estoque_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Atualizar Item', //page title
	'Atualizar', //menu title
	'manage_options', //capability
	'estoque_update', //menu slug
	'estoque_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'estoque-list.php');
require_once(ROOTDIR . 'estoque-create.php');
require_once(ROOTDIR . 'estoque-update.php');
