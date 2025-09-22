<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    if (!isset($nota1)){
        echo "<p>Nota 3 não pode estar vazia</p>";
    }
    if (!isset($nota2)){
        echo "<p>Nota 2 não pode estar vazia</p>";
    }
    if (!isset($nota3)){
        echo "<p>Nota 3 não pode estar vazia</p>";
    }

    $media = ($nota1 + $nota2 + $nota3)/3;

    echo "<p>Sua média é de <strong>$media</strong> pontos.</p>";
?>