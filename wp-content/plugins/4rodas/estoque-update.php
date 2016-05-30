<?php
function estoque_update () {
global $wpdb;
$id 			= $_GET["id"];
$nome			=$_POST["nome"];
$descricao		=$_POST["descricao"];
$preco			=$_POST["preco"];

//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'Produto', //table
		array('nome' => $nome, 'descricao' => $descricao, 'preco' => $preco), //data
		array( 'ID' => $id ), //where
		array('%s','%s', '%s'), //data format
		array('%s') //where format
	);	
}
//delete
else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM Produto WHERE id = %s",$id));
}
else{//selecting value to update	
	$produtos = $wpdb->get_results($wpdb->prepare("SELECT id, nome, descricao, preco from Produto where id=%s",$id));
	foreach ($produtos as $p ){
		$nome 		= $p->nome;
		$descricao 	= $p->descricao;
		$preco 		= $p->preco;
	}
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/4rodas/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Produtos</h2>

<?php if($_POST['delete']){?>
<div class="updated"><p>Produto deletado</p></div>
<a href="<?php echo admin_url('admin.php?page=estoque_list')?>">&laquo; Voltar para lista de produtos</a>

<?php } else if($_POST['update']) {?>
<div class="updated"><p>School updated</p></div>
<a href="<?php echo admin_url('admin.php?page=estoque_list')?>">&laquo; Voltar para lista de produtos</a>

<?php } else {?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table class='wp-list-table widefat fixed'>
<tr><th>Nome</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
<tr><th>Descrição</th><td><input type="text" name="descricao" value="<?php echo $descricao;?>"/></td></tr>
<tr><th>Preço</th><td><input type="text" name="preco" value="<?php echo $preco;?>"/></td></tr>
</table>
<input type='submit' name="update" value='Salvar' class='button'> &nbsp;&nbsp;
<input type='submit' name="delete" value='Deletar' class='button' onclick="return confirm('Deletar este produto?')">
</form>
<?php }?>

</div>
<?php
}