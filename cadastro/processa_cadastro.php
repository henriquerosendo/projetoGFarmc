<?php
    include_once "../banco/conexao_banco.php";
    $nome_funcionario = $_POST['nome_funcionario'];
    $cpf_funcionario = $_POST['cpf_funcionario'];
    $dt_adm = $_POST ['data_adm'];
    echo $nome_funcionario. "<br>";
    echo $cpf_funcionario. "<br>";
    echo $dt_adm ."<br>";

?>