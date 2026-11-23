<?php

require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome  = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $idade = (int) $_POST['idade'];

$sql = "INSERT INTO alunos (nome, email, idade)
        VALUES (:nome, :email, :idade)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':nome' => $nome,
    ':email' => $email,
    ':idade' => $idade
]);

echo "Aluno cadastrado com sucesso!";
}

?>


  
