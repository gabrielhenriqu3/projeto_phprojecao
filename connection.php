<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Db {
    private $conexao = null;
    private $DbConfig = 'mysql:host=localhost; dbname=projeto';
    private $DbUser = 'root';
    private $DbSenha = '';
            
    public function getInstancia(){
        $this->conexao = new PDO($this->DbConfig, $this->DbUser, $this->DbSenha);
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conexao;
    }
}
