<?php
    echo ("Holaa  <br>");

    $nombre="Neftali";
    $edad= 23;
    $altura=166.7;
    $isTrue=true;

    echo $nombre;
    echo "<br>";
    echo $edad;
    echo "<hr>";
    echo $altura;
    echo "<br>";
    echo $isTrue;

    $num1=14;
    $num2=16;
    $suma=$num1+$num2;
    echo "<h1>  El resultado de la suma:".$suma."</h1>";

    if($isTrue==true){
        echo "<h3>Este valor es trues </h3>";
    }else{
        echo "<h3>Este valor es falso </h3>";
    }

    function resta($num1,$num2){
        $res=$num1-$num2;
        echo "<h2>$res</h2>";
        return $res;
    }

    resta(4,2);

?>