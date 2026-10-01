<?php
    include "config/conexao.php";
    // POST é uma variavel especial do php, receber dados enviados
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $data_entrada = $_POST["data_entrada"];
    $status = $_POST["status"];

    $sql = "INSERT INTO ordens_servico
        (cliente, equipamento, problema, data_entrada, status)
        values (?, ?, ?, ?, ?,)";
    //STATEMET
    $stmt = $conexao->prepare($sql);

    $stmt->bind_param(
        "sssss",
        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status
    );

    if ($stmt->execute()){
        header("location: index.php");
        exit;
    } else{
        echo "erro ao cadastrar ordem de serviço";
    }
?>