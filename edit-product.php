<h1>Editar Produto</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST['id'];

    $res = $conn->query($sql);

    if ($res->num_rows == 0) 
    {
        print "<script>location.href='?page=list'</script>";
    }
    $row = $res->fetch_object();
?>

<form action="?page=save&acao=editar&id=<?php print $row->id; ?>" method="POST">
    <div class="my-3">
        <label for="nome">Nome do produto: </label>
        <input type="text" name="name" class="form-control" id="nome" value="<?php print $row->nome?>"/>
    </div>
    <div class="mb-3">
        <label for="preco">Preço do produto: (centavos)</label>
        <input type="number" name="price" class="form-control" id="preco" value="<?php print $row->preco?>"/>
    </div>
    <div class="mb-3">
        <label for="imgFile" class="form-label">Imagem do produto: </label>
        <input class="form-control" name="img" type="file" id="imgFile" value="<?php print $row->img?>">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>