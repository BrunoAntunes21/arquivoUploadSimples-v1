<?php

use function PHPSTORM_META\type;
try{
    #validando entrada de dados e tratando execoes
    if(!empty($_GET["v1"]))
    {if(strlen($_GET["v1"])< 3)
        throw new Exception("valor necesida tem mais caracteres");
    }else{
        throw new Exception("nenhum valor para v1");}
    if(empty($_GET["v2"]))
        throw new Exception("nenhum valor para v2");
        #variavel super globais
$nome=$_GET["v1"];
$idade=(int)$_GET["v2"];//casting
$frase="olá".$nome;
$frase.=" e tenho".$idade."anos .";

echo $frase;

}catch(Exception $e){
    echo $e->getMessage();
}

