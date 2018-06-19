<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if( isset($_POST) ){

    include 'connection.php';
    $db         = new Db();
    $conexao    = $db->getInstancia();
        
    try{
    //Campo update quando não atualiza cria usuario
    switch ($_POST['action']) {
        case 'UPDATE':
            
            //atualiza usuario baseado no email
            $sql = $conexao->prepare(
                'UPDATE usuarios SET 
                senha               = :senha ,
                nome                = :nome ,
                idade               = :idade ,
                nomePais            = :nomePais ,
                ultimaVisualizacao  = :ultimaVisualizacao ,
                telefone            = :telefone 
                WHERE email = :email'
            );
            
            $sql->execute(array(
                ':email'                => $_POST['email'],
                ':senha'                => $_POST['senha'],
                ':nome'                 => $_POST['nome'],
                ':idade'                => $_POST['idade'],
                ':nomePais'             => $_POST['nomePais'],
                ':ultimaVisualizacao'   => $_POST['ultimaVisualizacao'],
                ':telefone'             => $_POST['telefone']
            ));
            
            $stmt                   = $conexao->prepare(
                "SELECT * 
                FROM usuarios 
                WHERE email='".$_POST['email']."' 
                AND senha='".$_POST['senha']."' LIMIT 1"
            ); 
            $stmt->execute(); 
            $usuario                = $stmt->fetch();
            $_SESSION['usuario']    = $usuario;

            header('Location: /Projeto/index.php');

            break;

        case 'CREATE':

            //Cria novo usuario
            $sql = $conexao->prepare(
                'INSERT INTO usuarios (email, senha, nome, idade, nomePais, ultimaVisualizacao, telefone) 
                VALUES(:email, :senha, :nome, :idade, :nomePais, :ultimaVisualizacao, :telefone)'
            );
            
            $sql->execute(array(
                ':email'                => $_POST['email'],
                ':senha'                => $_POST['senha'],
                ':nome'                 => $_POST['nome'],
                ':idade'                => $_POST['idade'],
                ':nomePais'             => $_POST['nomePais'],
                ':ultimaVisualizacao'   => $_POST['ultimaVisualizacao'],
                ':telefone'             => $_POST['telefone']
              ));
            
            //$_SESSION['usuario'] = $_POST['email'];
            header('Location: /Projeto/index.php');

            break;
        
        default:
            echo 'NÂO FOI IDENTIFICADA A AÇÃO PARA ESSA REQUISICAO.';
            break;
    }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}else{
    echo 'Não enviada nenhuma requisicao POST';
}