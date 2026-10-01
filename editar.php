<?php
    include "config/conexao.php";

    $id = intval($_GET["id"])

    $sql = select * from ordens_servico whrere
            id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("1", $id)
    $stmt->execute();

    $resultado = stmt->get_result();
    $ordem = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar ordem</title>
    <link real="stylesheet" href="estilo/estilo.css"

    
</head>
<body>
    <div class="container"
    <h1editar ordem deserviço<h1>
    <form action="atualizar.php" method="post"
        <input
            type="hidden"
            name="id"
            value="<?php echo $ordem["id"];?>"

        <labelcliente</label>
        <input
            type="text"
            name="cliente"
            value="<?php echo htmlspecialchars($ordem ["cliente"]);>?"
            required
        >

        <labelcliente</label>
        <input
            type="text"
            name="equipamento"
            value="<?php echo htmlspecialchars($ordem ["equipamento"]);>?"
            required



        <label>problema</label>
        <textarea name="problema" required>
            <?php echo htmlspecialchars($ordem ["problema"]);>?"
        </textarea>

        <label>data_entrada>/label
        <input
            type="data"
            name="data_entrada"
            value="<?php echo $ordem ["data_entrada"]);>?"
            required
        <label>status>/label>
        <select name="status"
            <option value="recebido">recebido</option>
            <option value="em analise">em analise</option>
            <option value="em manuntenção">em manuntenção</option> 
            <option value="concluido">concluido</option>             
            


    </form>
</div>

</body>
</html>