<?php
    include "config/conexao.php";

    $id = intval($_POST ["id"]);
    $cliente = ($_POST["cliente"]);
    $equipamento = $_POST["eqipamento"];
    $problema = "$_POST["problema"]);
    $data_entrada = $_POST["data_entrada"];
    $status = $_POST["status"];

    $sql = "UPDATE ordens_servico
        set cliente = ?,
            equipamento = ?,
            problema = ?,
            data_entrada = ?,
            status = ?
        where id = ?",

    $stmt = $conexao -> prepare($sql);
    $stmt -> bind_param(
        "ssssssi",
        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status,
        $id
    );

    if ($stmt->execute()){
        header("location: index.php");
        exist;
        
    
    } else{
        echo "erro ao atualizar";
    }
    
?>