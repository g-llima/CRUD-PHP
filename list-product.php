<h1>Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    print "<form method='POST' action='?page=search'>
                <input class='form-control' type='text' name='search' placeholder='Buscar' required/>
                <button type='submit' class='btn btn-primary mt-3'>Buscar</button>
            </form>";
    if ($qtd > 0) 
    {
        print "<table class='table table-hover table-striped table-bordered mt-5'>";

        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Preço</th>";
        print "<th>Ações</th>";

        while ($row = $res->fetch_object()) 
        {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->preco . "</td>";
            print "<td>
                        <button class='btn btn-success' onclick=\"location.href='?page=edit&id=".$row->id."';\">Editar</button>
                        <button class='btn btn-danger' onclick=\" if(confirm('Tem certeza que deseja excluir?')) {location.href='?page=save&acao=excluir&id=".$row->id."';} \"'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";

    }
    else 
    {
        echo "<p class = 'alert alert-danger'>Não foram encontrados nenhum produto.</p>";
    }

?>