<?php

$alunos = [
    array("nome" => "Pedro", "media" => "5", "sexo" => "M"),
    array("nome" => "Jadir", "media" => "7", "sexo" => "ND"),
    array("nome" => "Maria", "media" => "8", "sexo" => "F")
];
$situacao = "";
echo "<table border='1'><tr><td>Nome</td><td>Média</td><td>Sexo</td><td>Situação</td></tr>";
foreach ($alunos as $chave => $valor) {
    if ($valor['media'] >= 6) {
        $situacao = "aprovado";
    } else {
        $situacao = "Reprovado";
    }
    echo "<tr>";
    echo "<td>" . $valor['nome'] . "</td>";
    echo "<td>" . $valor['media'] . "</td>";
    echo "<td>" . $valor['sexo'] . "</td>";
    echo "<td>" . $situacao . "</td>";
    echo "</tr>";
}
echo "</table>";