<html>
    <head>
    </head>
    <body>
        <h3> Operadores de Atribuição </h3>
    <?php
        //Aula 07
        //Pedro Noibauer
        //08/10

        $num=10;

        //Ele soma 10 + 5
        $num+=5;
        echo"O Numero somado por 5 é".$num;
        echo"<br><br>";

        //Ele subtrai 10 - 2
        $num-=2;
        echo"O Numero subtraido por 2 é".$num;
        echo"<br><br>";

        //Ele multiplica 10 * 3
        $num*=3;
        echo"O Numero multiplicado por 3 é".$num;
        echo"<br><br>";

        //Ele divide 10 / 2
        $num/=2;
        echo"O Numero dividido por 2 é".$num;
        echo"<br><br>";

        //Soma e depois mostra
        ++$num;
        echo "Pré-incremento".$num;
        echo"<br><br>";

        //Mostra e depois soma        
        echo "Pós-incremento".$num;
        $num++;
        echo"<br><br>";

        //Subtrai e depois mostra
        --$num;
        echo "Pré-decremento".$num;
        echo"<br><br>";

        //Mostra e depois subtrai
        echo "Pós-decremento".$num;
        $num--;
        echo"<br><br>";

        //Mostra o valor final
        echo"Valor final: ".$num;

        ?>
    </body>
</html>
