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
	add_menu_page('Abril - Produtos', //page title
	'Abril - Produtos', //menu title
	'manage_options', //capabilities
	'estoque_list', //menu slug
	'estoque_list' //function
	);
	
	//this is a submenu
	add_submenu_page('estoque_list', //parent slug
	'Adicionar Novo Produto', //page title
	'Adicionar Novo Produto', //menu title
	'manage_options', //capability
	'estoque_create', //menu slug
	'estoque_create'); //function

	//this is a submenu
	add_submenu_page('estoque_list', //parent slug
	'Abril - Clientes', //page title
	'Abril - Clientes', //menu title
	'manage_options', //capability
	'cliente_list', //menu slug
	'cliente_list'); //function

	//this is a submenu
	add_submenu_page('estoque_list', //parent slug
	'Adicionar Novo Cliente', //page title
	'Adicionar Novo Cliente', //menu title
	'manage_options', //capability
	'cliente_create', //menu slug
	'cliente_create'); //function

	//this is a submenu
	add_submenu_page('estoque_list', //parent slug
	'Abril - Pedidos', //page title
	'Abril - Pedidos', //menu title
	'manage_options', //capability
	'pedido_list', //menu slug
	'pedido_list'); //function

	//this is a submenu
	add_submenu_page('estoque_list', //parent slug
	'Adicionar Novo Pedido', //page title
	'Adicionar Novo Pedido', //menu title
	'manage_options', //capability
	'pedido_create', //menu slug
	'pedido_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Atualizar Produto', //page title
	'Atualizar Produto', //menu title
	'manage_options', //capability
	'estoque_update', //menu slug
	'estoque_update'); //function

	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Atualizar Cliente', //page title
	'Atualizar Cliente', //menu title
	'manage_options', //capability
	'cliente_update', //menu slug
	'cliente_update'); //function

	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Atualizar Pedido', //page title
	'Atualizar Pedido', //menu title
	'manage_options', //capability
	'pedido_update', //menu slug
	'pedido_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'estoque-list.php');
require_once(ROOTDIR . 'estoque-create.php');
require_once(ROOTDIR . 'estoque-update.php');

require_once(ROOTDIR . 'cliente-list.php');
require_once(ROOTDIR . 'cliente-create.php');
require_once(ROOTDIR . 'cliente-update.php');
