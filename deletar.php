<?php

if( isset($_GET) ){

    include 'connection.php';
    $db         = new Db();
    $conexao    = $db->getInstancia();
        
    try{
            
        //DELETA usuario baseado no email
        $sql = $conexao->prepare(
            'DELETE FROM usuarios WHERE email = :email'
        );
        
        $sql->execute(array(':email'                => $_GET['email']));
        
        //Desloga o Usuario
        session_start();
        unset($_SESSION['usuario']);
        session_destroy();
        
        header('Location: /Projeto/index.php');

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}else{
    echo 'Não enviada nenhuma requisicao GET';
}