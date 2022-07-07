<?php
try{
    #diretorio de destino
    $diretorio_destino="enviados/";
    //verificação da existencia do diretorio de destino
    if(!is_dir($diretorio_destino))
         throw new Exception("Diretório não encontrado");
         //caminho do novo arquivo no servidor
         $nome_arquivo_servidor=$diretorio_destino."enviados.pdf";
         //Movendo o arquivo temporario para o diretorio final
    if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"],$nome_arquivo_servidor))
        echo "Arquivo enviado!";
    else throw new Exception("Erro ao enviar .Erro:".$_FILES["arquivo_up"]["error"]);

    


    }catch(Exception $e){
        echo $e->getMessage();
    }
?>