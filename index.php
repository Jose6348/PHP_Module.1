<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>

<body>

    <?php
    $saudacao = "Oi, ";
    $Nome = "José Jorge";
    $titulo = $saudacao . $Nome;
    $subtitulo = "Seja bem vindo ao meu portfólio";
    ?>



    <h1>
        <?php


        echo $titulo;

        ?>
    </h1>

    <h2>
        <?=
        $subtitulo
        ?>
    </h2>

</body>

</html>