<?php

require_once "conexao.php";

$id = 1;

$sql = "DELETE FROM alunos
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':id' => $id
]);

echo "Aluno excluído com sucesso!";

?>