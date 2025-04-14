<?php

// Incluir o arquivo 'aluno.php', que contém a classe Aluno
// Incluir o alunosView.php, que contém a função exibirAlunos()

require_once 'aluno.php';
require_once 'alunosView.php';

// Declaração da classe alunoController
// Essa classe é responsável pela comunicação entre o aluno.php (Model) e o alunosView.php (View)

class alunoController{
    // Criar uma propriedade privada chamada $model
    // Ela será usada para armazenar uma instância da classe aluno

    private $model;

    // Criar um método constructor da classe, ele é chamado automaticamente quando um objeto foi criado
    public function __construct()
    {
        // Criar uma nova instancia da classe aluno, e armazenar na propriedade $model

        $this->model = new Aluno();
    }

    // Método publico chamado Listar
    // Ele serve para buscar a lista de alunos e passar para o View

    public function listar(){
        // Chama o metodo listarAlunos() do modelo e armazena na variavel $alunos

        $alunos = $this->model->listarAlunos();

        // Chama a função exibir alunos e envia a lista para mostrar no navegador

        exibirAlunos($alunos);
    }
}   

// execução do código
// Aqui fora da classe é criado um objeto do tipo alunoController
$controler = new alunoController();

// Após criar o objeto, é chamado o método listar()
$controler->listar();
?>