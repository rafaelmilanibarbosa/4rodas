<?php
function estoque_create () {
//$id 		= $_POST["id"];
$nome 		= $_POST["nome"];
$descricao 	= $_POST["descricao"];
$preco 		= $_POST["preco"];

//insert
if(isset($_POST['insert'])){
	global $wpdb;
	/*$wpdb->insert(
		'Produto', //table
		array('nome' => $nome, 'descricao' => $descricao, 'preco' => $preco) //data		
	);*/
	
	$insert =  $wpdb->query("INSERT INTO `Produto`(`nome`, `descricao`, `preco`) VALUES ('$nome', '$descricao', '$preco')");
	print_r($insert);
	$message.="Produto adicionado t";
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/4rodas/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Adicionar novo Produto</h2>
<?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<p>3 Letras maiúsculas para ID</p>
<table class='wp-list-table widefat fixed'>
<tr><th>Produto</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
<tr><th>Descrição</th><td><input type="text" name="descricao" value="<?php echo $descricao;?>"/></td></tr>
<tr><th>Preço</th><td><input type="text" name="preco" value="<?php echo $preco;?>"/></td></tr>
</table>
<input type='submit' name="insert" value='Salvar' class='button'>
</form>
</div>
<?php
}