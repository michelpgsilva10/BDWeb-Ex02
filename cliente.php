<?php
    header("Content-Type: text/html; charset=ISO-8859-1",true); 

    $conexao = mysql_connect('localhost', 'root', '');
    
    if (!$conexao)
        die('Não foi possível conectar: ' . mysql_error()); 
    
    mysql_select_db('bdweb', $conexao);
    
    $sql = "INSERT INTO cliente(nome, apelido, email, endereco_rua, endereco_numero " .
                ", endereco_CEP, endereco_bairro, endereco_cidade, endereco_uf " .
                ", endereco_complemento, observacoes, tipo) ".
                " VALUES ('" . utf8_decode($_POST['nome']) . "', '" . utf8_decode($_POST['apelido']) . "', '" . $_POST['email'] . "', " .
                "'" . utf8_decode($_POST['endereco_rua']) . "', '" . utf8_decode($_POST['endereco_numero']) . "', '" . utf8_decode($_POST['endereco_CEP']) . "', " .
                "'" . utf8_decode($_POST['endereco_bairro']) . "', '" . utf8_decode($_POST['endereco_cidade']) . "', '" . utf8_decode($_POST['endereco_uf']) . "', " .
                "'" . utf8_decode($_POST['endereco_complemento']) . "', '" . utf8_decode($_POST['observacoes']) . "', '" . $_POST['tipo'] . 
                "')";  
    
    if (mysql_query($sql)) 
        echo 'Inserido com sucesso!';
    else
        echo 'Erro ao inserir registro!';
?>