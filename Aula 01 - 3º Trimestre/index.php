<html>
    <head>
    </head>
        <title> Aula 03 PHP </title>
    <body>
        <?php
        $nome = "Pedro Noibauer";

        $N1 = 10;
        $N2 = 2;
        $soma = $N1 + $N2;

        echo "Meu nome é " .$nome;
        echo "<br> Meu nome é $nome";

        echo"<br> <br> A soma de $N1 e $N2 é igual a $soma.";

        echo"<br><br> O resultado da subtração de $N1 e $N2 é igual a: " .($N1-$N2) . ".";

        echo"<br><br> O resultado da multiplicação de $N1 e $N2 é igual a: " .($N1*$N2) .".";

        echo"<br><br> O resultado da divisão de $N1 e $N2 é igual a: " .($N1/$N2) .".";

        echo"<br><br> O resultado da multiplicação de $N1 e $N2 é igual a: " .($N1%$N2) .".";

        ?>
    </body>
</html>
