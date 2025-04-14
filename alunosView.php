<?php
// Declara uma função chama exibirAlunos que recebe o parametro $alunos
// Esse parâmetro é esperado com um array com informações dos alunos

function exibirAlunos($alunos){
// imprime na tela um título h2 e abre uma lista não ordenada ul

echo "<h2> Lista de Alunos:</h2> <ul>";

// Inicia um loop foreach, que percorre cada item do array $alunos
// Cada item é armazenada temporariamente na variável $aluno

foreach($alunos as $aluno){
// para cada aluno, imprime um item da lista (li)
// Exibe o nome do aluno e sua idade, formatados como "Nome - Idade anos".

echo "<li>{$aluno['nome']} - {$aluno ['idade']} anos</li>";

}

echo "</ul>";

}
?>