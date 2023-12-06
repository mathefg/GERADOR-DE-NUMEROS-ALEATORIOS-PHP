<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de numeros aleatorios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de numeros aleatorios</h1>
        <?php
        $min=0;
        $max=100;
        $num=mt_rand($min,$max);
        //Além do mt_rand tem o random_int que server para gerar numeros aleatorios criptograficamente seguros pórem ele é mais lento   
        echo"Gerador de numeros entre $min e $max <br>";
        echo"O numero gerado foi $num";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504 Gerar Novo</button>
    </main>
    
</body>
</html>