<?php

echo "Estou dentro de FormPessoa.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        label, input{
            display: block;
        }
    </style>
</head>
<body>
    

<!-- Veja action e method! -->

    <form action="/pessoa/form/save" method="post">


    <input type="hidden" name="id" value="<?= $model->id ?>">


    <fieldset>
        <legend>Cadastro de Pessoas</legend>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $model->nome ?>">

        <label for="cpf">CPF:</label>
        <input type="number" id="cpf" name="cpf" value="<?= $model->cpf ?>">

        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" id="data_nascimento" name="data_nascimento" value="<?= $model->data_nascimento ?>"> 

        <button type="submit">Salvar</button>
    </fieldset>
    </form>
    
</body>
</html>