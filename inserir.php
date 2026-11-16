<?php

require_once "conexao.php";

$nome = "João da Silva";
$email = "joao@email.com";
$idade = 17;

$sql = "INSERT INTO alunos (nome, email, idade)
        VALUES (:nome, :email, :idade)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':nome' => $nome,
    ':email' => $email,
    ':idade' => $idade
]);

echo "Aluno cadastrado com sucesso!";

?>