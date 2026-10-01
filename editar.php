<?php
    include "config/conexao.php"

// o intval é para garantir que o numero venha inteiro e senha guarde na id
    $id = intval($_GET["id"])

    $sql = "select * from ordens_serviço";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $ordem = $resultado->fetch_assoc();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar ordem</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Editar ordem de serviço</h1>
        <form action="atualizar.php" method="post">
            <input 
                type="hidden"
                name="id"
                value="<?php echo $ordem ["id"];?>"
            >
            <label>Cliente</label>
             <input 
                type="text"
                name="cliente"
                value="<?php echo htmlspecialchars ($ordem ["cliente"]);?>"
                required
            >
            <label>Equipamento</label>
            <input 
                type="text"
                name="equipamento"
                value="<?php echo htmlspecialchars ($ordem ["equipamento"]);?>"
                required
            >
            <label>Problema</label>
            <textarea name="problema" required>
                <?php echo htmlspecialchars ($ordem ["problema"]);?>"
            </textarea>
            <label>Data de entrada</label>
            <input 
                type="date"
                name="data_entrada"
                value="<?php echo ["data_entrada"];?>"
                required
            >
            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em análise">Em análise</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Concluído">Concluído</option>
            </select>

            <button type="submit">Atualizar</button>
            
        </form>
    </div>
    
</body>
</html>