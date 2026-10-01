<?php
    include "config/conexao.php";

    $id = intval($_POST["id"]);
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"]
    $problema = $_POST["problema"]
    $data_entrada = $_POST["data_entrega"]
    $status = $_POST["status"];

    $sql = "update ordens_servico
            set cliente = ?,
                equipamento = ?,
                problema = ?,
                data_entrada = ?,
                status = ? 
            where id = ?";
    $stmt = $conexao -> prepara($sql);
    $stmt -> bind_param(
        "sssssi",
        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status
        $id
    );
    
    if($stmt->execute()){
        header ("Location:index.php");
        exit; 
    } else {
        eho "Erro ao atualizar.";
    }

?>