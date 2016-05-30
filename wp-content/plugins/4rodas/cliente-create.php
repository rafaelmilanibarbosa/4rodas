<?php
function cliente_create () {
//$id 		= $_POST["id"];
$nome 		= $_POST["nome"];
$email 		= $_POST["email"];
$telefone 	= $_POST["telefone"];

//insert
if(isset($_POST['insert'])){
	global $wpdb;
	$wpdb->insert(
		'Cliente', //table
		array('nome' => $nome, 'email' => $email, 'telefone' => $telefone) //data		
	);

	$message.="Cliente adicionado";
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/4rodas/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Adicionar novo Produto</h2>
<?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

<table class='wp-list-table widefat fixed'>
<tr><th>Cliente</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
<tr><th>E-mail</th><td><input type="text" name="email" value="<?php echo $email;?>"/></td></tr>
<tr><th>Telefone</th><td><input type="text" name="telefone" value="<?php echo $telefone;?>"/></td></tr>
</table>
<input type='submit' name="insert" value='Salvar' class='button button-primary'>
</form>
</div>
<?php
}