<?php 

	require_once("config.php");

	#$sql = new Sql();

	#$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// Carreha um usuário
	//$root = new Usuario();
	//$root->loadbyId(3);
	//echo $root;

	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando peloo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	//Carrega um usuário usando o login e senha
	$usuario = new Usuario();
	$usuario->login("root", "123");
	echo $usuario;

 ?>

<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Layout 3 colunas</title>
<link type="text/css" rel="stylesheet" media="screen" href="estilo.css" />
 
</head>

<body>

	<ul>
	<?php 
	//while($lista = $usuarios->fetch(PDO::FETCH_ASSOC));
	?>	

		<li></li>

	<?php #endwhile; ?>	

	</ul>



<div id="site">
 
<div id="header"></div>

<div id="conteudo">

	<div id="conteudo-left"></div>
	<div id="conteudo-left"></div>
 
</div>

<div id="footer"></div>
 
</div>
-->
