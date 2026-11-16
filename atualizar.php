<?php

require_once "conexao.php";

$id = 1;
$novoEmail = "novoe-mail@email.com";

$sql = "UPDATE alunos
        SET email = :email
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':email' => $novoEmail,
    ':id' => $id
]);

echo "Cadastro atualizado com sucesso!";

?>