<?php
    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $senhasem = $_POST ["senha"];
    $senha = md5($senhasem);
    $conn = mysqli_connect('localhost', 'root', '', 'comercio');

    $sql = "insert into usuario values (null,'".$nome."','".$email."','".$senha."')";

    if (mysqli_query($conn,$sql)){

        echo "Cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar";
    }    
    mysqli_close($conn);
?>    
