<div class="container mt-5">
    <h2>Registrar Novo Produto</h2>
    
    <form action="?page=salvar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="acao" value="cadastrar" >
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="desc_prod" class="form-label">Descrição do Produto</label>
            <input type="text" class="form-control" id="desc_prod" name="desc_prod" required>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" name="tipo" required>
                <option value="drink">Drink</option>
                <option value="food">Food</option>
                <option value="combo">Combo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Produto</button>
    </form>
</div>