<?php
//inicialição da sessaão
 session_start();
 try{
    $usuario_certo="bruno";
    $senha_certa="1234";
    //recebimento do login e senha via metodo post
    $usuarioDigitado=$_POST["user"];
    $senhaDigitada=$_POST["senha"];
    if($usuarioDigitado==$usuario_certo){
        if( $senhaDigitada==$senha_certa){
            //configurando a sessao atual 
            $_SESSION["usuario logado"]=$senhaDigitada;
            header("Location:index_main.php");
        }else{
            header("Location:index.php");
            

        }
    }else{
        header("Location:index.php");
  
    }
    

//trecho de tratamento de erro ainda em execução
 }catch(Exception $e){
    echo $e->getMessage();

 }