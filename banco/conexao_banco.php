<?php
$servidor = "localhost";
$usuario_bd = "root";
$senha_bd = "usbw";
$banco = "db_gfarmc";
  
$conn = new mysqli($servidor, $usuario_bd, $senha_bd, $banco);   

if(!$conn){
    echo "nao foi possivel, a conexão com o banco!!";
}else{
    //echo "O banco foi connectado!!";
}

mysqli_close($conn);

?>