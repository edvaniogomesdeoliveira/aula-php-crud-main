<?php
  require 'hearder.php';
  require 'conector.php';                            // Inclui o arquivo de conexão com o banco de dados
  $sql = "select * from produtos";                 // Cria uma string SQL que seleciona todos os registros da tabela 'alunos'
  $resultado = mysqli_query($con, $sql);  


?>

<h1>Todos os Produtos</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço de compra</th>
      <th scope="col">Preço de venda</th>
      <th scope="col">Estoque</th>
      <!-- <th scope="col">Ações</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
        // Início do loop que percorre todas as linhas retornadas da tabela 'alunos'
        while($row=mysqli_fetch_assoc($resultado)){          // Cada iteração pega uma linha da tabela como array associativo ($row)
            echo "<tr>";                                    // Cria uma nova linha na tabela HTML

            echo "<td>".$row['id']."</td>";                 // Cria uma célula com o ID do aluno
            echo "<td>".$row['nome']."</td>";               // Cria uma célula com o nome do aluno
            echo "<td>".$row['preco_compra']."</td>";          // Cria uma célula com o número de matrícula
            echo "<td>".$row['preco_venda']."</td>";              // Cria uma célula com a nota 1
            echo "<td>".$row['estoque']."</td>";              // Cria uma célula com a nota 2


            //echo "<td>".$row['status_aluno']."</td>";     // Linha antiga (comentada) que exibia o status sem aplicar cor
            echo "</tr>";                                   // Fecha a linha da tabela
        }
                 ?>           
    <tr>
      <td>
         <a class="btn btn-outline-danger" href="#" role="button">Excluir</a>
         <a class="btn btn-outline-success" href="editar.php" role="button">Editar</a>
      </td>
    </tr>
  </tbody>
</table>


<?php
require 'footer.php';
?>

