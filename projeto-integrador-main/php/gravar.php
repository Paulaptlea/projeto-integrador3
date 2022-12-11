<?php

// pegar dados da tela

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$artigo = $_POST["artigo"];
$foto = $_FILES["foto"];

//echo var_dump($foto);

$ext = explode(".",$foto["name"]);//[foto][nome][ext]
$ext = array_reverse($ext);//[jfif][R]
$ext = $ext[0];

if(($ext != "jpg")&& ($ext != "png") && ($ext != "gif")){
    echo"Arquivo Inválido!";  
} elseif($foto["size"] < 1024 *20){
    echo "Tamanho excedido!";
}else{
    //vamos para o banco
    $con = msqli_connect("localhost","root","","artigo");

    // montar a instrução para gravar no banco  de dados
    $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;
    //202222134610600.png

    $sql = "insert into artigo values(null,'".$titulo."','".$autor."','".$artigo."','".$nomefoto."',)";
    if(msqli_query($con,$sql)){
        echo"Gravado com Sucesso";
        // mover a imagem para dentro da pasta que esta no nosso projet
        move_uploaded_file($foto["tmp_name"],"./uploads/".$nomefoto);
    }else{
        echo"Erro ao gravar";
    }
    mysqli_close($con);
}