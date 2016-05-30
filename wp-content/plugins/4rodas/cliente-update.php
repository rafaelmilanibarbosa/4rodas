<?php
function cliente_update () {
global $wpdb;
$id 			= $_GET["id"];
$nome			=$_POST["nome"];
$email   		=$_POST["email"];
$telefone		=$_POST["telefone"];

//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'Cliente', //table
		array('nome' => $nome, 'email' => $email, 'telefone' => $telefone), //data
		array( 'ID' => $id ), //where
		array('%s','%s', '%s'), //data format
		array('%s') //where format
	);	
}
//delete
else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM Cliente WHERE id = %s",$id));
}
else{//selecting value to update	
	$produtos = $wpdb->get_results($wpdb->prepare("SELECT id, nome, email, telefone from Cliente where id=%s",$id));
	foreach ($produtos as $p ){
		$nome 		= $p->nome;
		$descricao 	= $p->descricao;
		$preco 		= $p->preco;
	}
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/4rodas/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>lientes</h2>

<?php if($_POST['delete']){?>
<div class="updated"><p>Cliente deletado</p></div>
<a class="button button-primary" href="<?php echo admin_url('admin.php?page=cliente_list')?>">&laquo; Voltar para lista de clientes</a>

<?php } else if($_POST['update']) {?>
<div class="updated"><p>Cliente atualizado</p></div>
<a class="button button-primary" href="<?php echo admin_url('admin.php?page=cliente_list')?>">&laquo; Voltar para lista de clientes</a>

<?php } else {?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table class='wp-list-table widefat fixed'>
<tr><th>Nome</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
<tr><th>E-mail</th><td><input type="text" name="email" value="<?php echo $email;?>"/></td></tr>
<tr><th>Telefone</th><td><input type="text" name="telefone" value="<?php echo $telefone;?>"/></td></tr>
</table>
<input type='submit' name="update" value='Salvar' class='button button-primary'> &nbsp;&nbsp;
<input type='submit' name="delete" value='Deletar' class='button button-primary button-delete' onclick="return confirm('Deletar este cliente?')">
</form>
<?php }?>

</div>
<?php
}