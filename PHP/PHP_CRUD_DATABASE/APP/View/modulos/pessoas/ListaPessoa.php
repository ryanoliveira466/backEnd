<?php

// echo "Estou dentro de ListaPessoa.php"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Excluir</th>
        </tr>
        <?php foreach ($model->rows as $item): ?>
            <tr>
            <td><a style="text-decoration: none;" href="/pessoa/delete?id=<?= $item->id ?>">❌</a></td>
            <td><?= $item->id?></td>
            <td><a style="text-decoration: none;" href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome?></a></td>
            <td><?= $item->cpf?></td>
            <td><?= $item->data_nascimento?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>