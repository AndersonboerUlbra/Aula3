<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/Database.php';

class EstudanteModel {
    public string $nome;
    public int $idade;
    public $database;

    public function __construct(){
        $this->database = new Database();

    }


    public function salvar(string $nome, int $idade){
        $sql = "INSERT INTO estudantes (nome, idade) values ('$nome', '$idade')";
        $this->database->insert($sql);
        echo "O estudante foi salvo corretamente";
    }

    public function listar(){
        $dadoArray = $this->database->executeSelect("SELECT * FROM estudantes");
        return $dadoArray;
    }
}