<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando linguagem nova papai</title>
</head>
<body>
    <h1>Teste PHP</h1>
    <?php
        $nome = 'Bryan';
        echo "<p>Bem-vindo $nome</p>";
        $a = 10;
        $b = 20;
        $soma = $a + $b;
        echo "A soma de $a + $b é igual a $soma";
        echo "<br>";

        $status = '';
        if($status){
            echo "Está ativo";
        }
        else{
            echo "Está desligado";
        }
        echo "<hr>"; //<hr> printa linha.

        for($i=1;$i<=100;$i++){
            if($i%2 == 0){
                echo "$i <br>";
            } //printando números pares entre 1 e 100 utilizando mod (%).
        }
    ?>
</body>
</html>