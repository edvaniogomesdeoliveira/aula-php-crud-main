<?php

require 'hearder.php';
?>

<h1>Editar de Produtos</h1>
<form method="put" action="atualizar.php">
    <filedset>
        <legend></legend>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">                
            </div>
            <div class="mb-3">
                <label for="compra" class="form-label">Preço de compra fornecedor</label>
                <input type="number" class="form-control" id="compra" name="compra">
            </div>
            <div class="mb-3">
                <label for="venda" class="form-label">Preço de venda</label>
                <input type="number" class="form-control" id="venda" name="venda">
            </div>
            <div class="mb-3">
                <label for="estoque" class="form-label">Estoque</label>
                <input type="number" class="form-control" id="estoque" name="estoque">
            </div>            
            <button type="submit" class="btn btn-primary">Salvar</button>
    </filedset>

</form>
<p><a href="list.php">Voltar</a></p>

<?php 
require 'footer.php';
?>