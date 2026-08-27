<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifood</title>
</head>

<body>
    <h2>Gereciamento de Pedidos</h2>

    <button type="button" onclick="window.location.href='public/restaurante/add_restaurante.php'">Cadastrar Restaurante</button> <br>
    <button type="button" onclick="window.location.href='public/clientes/add_cliente.php'">Cadastrar Cliente</button> <br>
    <button type="button" onclick="window.location.href='public/pedidos/add_pedido.php'">Cadastrar Pedido</button> <br>

    <h2>Listagem de restaurantes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </tr>

        <?php
            include 'infra/conexao.php';
            $sql = "SELECT * FROM restaurante";
            $restaurantes = $conn->query($sql);
            while ($row = $restaurantes->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['categoria'] . "</td>";
                echo "<td>" . $row['endereco'] . "</td>";
                echo "<td>" . $row['telefone'] . "</td>";
                echo "</tr>";
            }
        ?>


</body>
</html>