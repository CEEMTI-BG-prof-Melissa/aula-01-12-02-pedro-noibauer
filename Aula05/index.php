<html>
    <head>
<title> Aula 05 PHP </title>
    </head>    

    <body>
        <?php
        $n1= 2;
        $n2= $_GET["x"];
    
        echo "Os valores informados são $n1 e $n2 <br>";
        echo "O valor absoluto de $n2 é " .abs($n2);
        echo "<br> O resultado de $n2  <sup>$n1</sup> é igual a  " .pow($n2,$n1);
        echo "<br> A raiz quadrada de $n2 é " .sqrt($n2);
        echo "<br> O valor arredondado de $n2 é " .ceil($n2);
        echo "<br> O valor arredondado de $n2 é " .floor($n2);
        echo"<br> O valor do número truncado de $n2 é " .intval($n2);
 
        ?>
    </body>
</html>
