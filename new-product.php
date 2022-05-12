<h1>Adicionar produto</h1>

<form action="?page=save&acao=adicionar" method="POST">
    <div class="my-3">
        <label for="nome">Nome do produto: </label>
        <input type="text" name="name" class="form-control" id="nome" required/>
    </div>
    <div class="mb-3">
        <label for="preco">Preço do produto: (centavos)</label>
        <input type="number" name="price" class="form-control" id="preco" required/>
    </div>
    <div class="mb-3">
        <label for="imgFile" class="form-label">Imagem do produto: </label>
        <input class="form-control" name="img" type="file" id="imgFile">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>