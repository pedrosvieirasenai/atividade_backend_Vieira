<?php
    include "config/conexao.php";

    $sql = "select * from ordens_servico";
    $resultado = $conexao->query($sql);
?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>assistencia_tecnica</title>
        <link rel="stylesheet" href="estilo/estilo.css">
    </head>
    <body>
       <div class="container">
       <h1>ordens de serviço</h1>
       <a href="cadastrar.php" class="botao">Nova Ordem</a>
    

       <table> 
       <tr>
       <th>ID</th>
       <th>cliente</th>
       <th>equipamento</th>
       <th>problema</th>
       <th>data</th>
       <th>status</th>
       <th>ações</th>
       </tr>

       <?php while ($ordem = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $orrdem ["id"]; ?></td>
            <td><?php echo $ordem ["cliente"] ?></td>
            <td><?php echo $ordem ["equipamento"] ?></td>
            <td><?php echo $ordem ["problema"] ?></td>
            <td><?php echo $ordem ["data_entrada"] ?></td>
            <td><?php echo $ordem ["status"] ?></td>
            <td>
                <a href="editar.php?id=<?php echo $ordem ["id"];?>">editar</a>
            </td>
            </tr>
        <?php } ?>
    </table>

    </div>

</body>

</html>
