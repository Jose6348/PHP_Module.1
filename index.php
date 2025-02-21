<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>

<body>

     <!-- Variáveis -->

    <?php
    $projeto = "Meu protfolio";
    $finalizado = true;
    $dataDoProjeto = "2025-02-20";
    $descricao = "Projeto de portfolio em Htm e PHP";

    // Listas 

    $projetos = [

        "Meu portfolio",
        "Lista de tarefas",
        "Controle de Leitura de Livros",
        "Mais um projeto"
    ]
    ?>


    <!-- Declaraçao de variáveis  -->

    <h2><?= $projeto ?></h2>
    <p><?= $descricao ?></p>
    <?= $dataDoProjeto ?>

    <ul>
        <?php foreach ($projetos as $projeto)
            echo "<li>$projeto</li>";
        ?>
    </ul>

    <!-- <div>Projeto
        <div>
            <?php if ($finalizado): ?>
                <span>Projeto finalizado </span>
            <?php else: ?> Nao finalizado
            <?php endif; ?>
        </div> -->


    </div> 

            <!-- Condições -->
    <!-- <div>
        <div><?=$dataDoProjeto ?></div>
        <div>

            <div>
                <?php
                if ($finalizado) {
                    echo "Projeto Finalizado";
                } else {
                    echo "X - Não finalizado";
                }
                ?>

            </div>

        </div> -->

    </div>





</body>

</html>