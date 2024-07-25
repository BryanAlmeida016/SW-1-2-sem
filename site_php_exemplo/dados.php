<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "<p>Bem-vindo <b>$nome</b>.</p>"; //b e strong deixam em negrito.
    echo "<p>Você tem <b style=\"color:red;\">$idade</b> anos de idade.</p>";
?>