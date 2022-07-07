<?php
//verificação da seesao
    session_start();
    //verificando se a sessao está com o valor setado
    if(!isset($_SESSION["usuario logado"]))
        header("Location:index.php");
    //verificando se houve um get sair
    if(isset($_GET["sair"])){
        //destruindo a informação da sessao salva
        unset($_SESSION["usuario logado"]);
        header("Location:index.php");}
        ?>
    <h1> bem vindo a area restrida</h1>
    <a href="index.php?sair=true">Sair</a>