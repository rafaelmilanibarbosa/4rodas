<?php
function estoque_list () {
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/4rodas/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Produtos</h2>
<a class="button button-primary" href="<?php echo admin_url('admin.php?page=estoque_create'); ?>">Adicionar Novo</a>
<?php
global $wpdb;
$rows = $wpdb->get_results("SELECT id, nome, descricao, preco from Produto");
echo "<table class='wp-list-table widefat fixed'>";
echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>&nbsp;</th></tr>";
foreach ($rows as $row ){
	echo "<tr>";
	echo "<td>$row->id</td>";
	echo "<td>$row->nome</td>";	
	echo "<td>$row->descricao</td>";
	echo "<td>$row->preco</td>";	
	echo "<td><a class='button button-primary' href='".admin_url('admin.php?page=estoque_update&id='.$row->id)."'>Atualizar</a></td>";
	echo "</tr>";}
echo "</table>";
?>
</div>
<?php
}