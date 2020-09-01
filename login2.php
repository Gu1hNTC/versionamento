<?php

  $email= $_POST['email'];

  $entrar = $_POST['entrar'];

  $senha = md5($_POST['senha']);

   $conn = mysqli_connect('localhost', 'root', '', 'comercio') ;

 

    if (isset($entrar)) {

             

      $verifica = mysqli_query("select * from usuario where email='$email' and senha='$senha'") or die("erro ao selecionar");

        if (mysqli_num_rows($verifica)<=0){

         $dados = mysqli_fetch_array($resultado);
	
	        header("location: formulario.php");

          die();

        }else{

         echo "<script>
	        alert('Usuário não encontrado');
	        location.href='login.php';
	      </script>";

        }

    }

?>