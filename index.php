<?php 
$finalizado = true;
$nome = "Projeto 1";

function verificarSeEstaFinalizado(){
    global $finalizado;
    if ($finalizado == true){
        echo "O projeto está finalizado";
    } else {
        echo "O projeto não está finalizado";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>

<body>

<?php 
$finalizado = true;
$nome = "Projeto 1";
verificarSeEstaFinalizado();
?>

</body>

</html>