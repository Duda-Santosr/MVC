<?php

// Defina uma classe chamada aluno
class Aluno{
    // Criar uma propriedade privada (Encapsulamento) chamada $alunos
    // Essa propriedade é um array que armazena dados e alunos.
    // Cada aluno é representado por um array associativo com nome e idade.

    private $alunos = [
        ['nome' => 'João', 'idade' => 16],
        ['nome' => 'Isabela', 'idade' => 17],
        ['nome' => 'Felipe', 'idade' => 18]
    ];

    // Define um método público chamado listarAlunos
    // Esse método serve para "retornar o conteúdo do array $alunos

    public function listarAlunos(){
        return $this ->alunos;
    }
}

?>