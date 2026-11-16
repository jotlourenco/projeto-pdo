<?php

require_once "conexao.php";

$sql = "SELECT * FROM alunos";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($alunos as $aluno) {

    echo "ID: " . $aluno['id'] . "<br>";
    echo "Nome: " . htmlspecialchars($aluno['nome']) . "<br>";
    echo "E-mail: " . htmlspecialchars($aluno['email']) . "<br>";
    echo "Idade: " . $aluno['idade'] . "<br>";

    echo "<hr>";

}

?>