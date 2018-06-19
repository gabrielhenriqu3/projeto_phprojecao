<?php

// session_start inicia a sessão
session_start();

// Controla e efetua o login
if( isset($_POST['email']) && isset($_POST['senha']) ){

	include 'connection.php';
	$db         = new Db();
    $conexao	= $db->getInstancia();
	$stmt 		= $conexao->prepare("SELECT * FROM usuarios WHERE email='".$_POST['email']."' AND senha='".$_POST['senha']."' LIMIT 1"); 
	$stmt->execute(); 
	$usuario 	= $stmt->fetch();

	if ( $usuario ) {
    	$_SESSION['usuario'] = $usuario;
	}
}

//Mostra os dados se tiver logado
if( isset($_SESSION['usuario']) ){    

  include_once 'layout/head.php';

  include_once 'layout/menu.php';  

	  // Inclui a pagina solicitada ou Bem-vindos
	  if ( isset($_GET['pagina']) ) {
	  	include_once 'paginas/'.$_GET['pagina'].'.php';  
	  }else{
	  	echo '<h1>Bem-vindo(a) ao Me Ache!</h1>';
	  }

  include_once 'layout/footer.php';

}else{

  header('Location: login.php');

}

    