<h1>Pesquisa de produto</h1>
<?php
    $search = $_POST['search'];

    $sql = "SELECT * FROM produtos WHERE nome LIKE '%{$search}%'";
    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    print "<p class='text-center'>".$qtd." produto(s) encontrado(s)</p>";
    print "<b><p class='text-center'>".$search."</p></b>";

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