<?php

 class Conexao{

    private $host = 'mysql:host=localhost;dbname=fakeinstagram;port=3306';
    private $user = 'root';
    private $pass = '';

    protected function criarConexao(){
        return new PDO($this->host, $this->user, $this->pass);
    }

 }