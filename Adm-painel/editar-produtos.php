<?php
 $sql = "SELECT * FROM PRODUTOS WHERE ID=".$_REQUEST['id'];
 $res = $conn->query($sql);
 $row = $res->fetch_object();
?>
<div class="container mt-5">
    <h2>Editar Produto</h2>
    
    <form action="?page=salvar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="acao" value="editar" >
        <input type="hidden" name="id" value="<?php echo $row->ID; ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row->NOME;?>" required>
        </div>
        <div class="mb-3">
            <label for="desc_prod" class="form-label">Descrição do Produto</label>
            <input type="text" class="form-control" id="desc_prod" name="desc_prod" value="<?php echo $row->DESC_PROD;?>"required>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" class="form-control" id="preco" name="preco" value="<?php echo $row->PRECO;?>" required>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" name="tipo" required>
                <option value="drink" <?php echo $row->TIPO == 'drink' ? 'selected' : ''; ?>>Drink</option>
                <option value="food" <?php echo $row->TIPO == 'food' ? 'selected' : ''; ?>>Food</option>
                <option value="combo" <?php echo $row->TIPO == 'combo' ? 'selected' : ''; ?>>Combo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto_atual">
        </div>
        <button type="submit" class="btn btn-primary">Registrar Produto</button>
    </form>
</div>