<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A nova ordem de serviço</title>
    <link real = "stylesheet" href = "estilo/estilo.css">
</head>
<body>
    <div class = "container"></div>
        <h1>Nova ordem de serviço</h1>

        <form action="salvar.php" method="post">
            <label>cliente</label>
            <input type="text" name="cliente" required>

            <label>equipamento</label>
            <input type="text" name="equipamento" required>

            <label>problema apresentado</label>
            <textarea name="problema" required></textarea>

            <label>data de entrada</label>
            <input type="data" name="data_entrada" required>

            <label>Status</label>
            <select name="status">
                 <opction value= "recebido">recebido</opction>
                <opction value= "em análise">em análise</opction>
                <opction value= "em manutenção">em manutenção</opction>
                <opction value= "concluido">concluido</opction>
            </select>
            <button type="submit">cadatradar ordem</button>
        </form>

    <a href="index.php">voltar</a>

</body>
</html>