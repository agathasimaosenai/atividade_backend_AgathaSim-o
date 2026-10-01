<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova ordem de serviço</title>
    <link rel="stylesheet" href="estilo/estilo.css">

</head>
<body>
    <div class="container">
        <h1> Nova ordem de serviço </h1>

        <form action="salvar.php" method="post">
            <label>Cliente</label>
            <input type="text" name="cliente" requied>

            <label>Equipamente</label>
            <input type="text" name="equipamento" requied>

            <label>Problema apresentado</label>
           <textarea name="problema" required></textarea>

            <label>Data de entrada</label>
            <input type="date" name="dataEntrada" requied>

            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em análise">Em análise</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Concluido">Concluido</option>
</select>
            <button type="submit">Cadastrar ordem</button>
        
        </form>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>