<h1>Listar contatos</h1>
<hr>

<table class='table table-hover table-stripped'>
  <thead class='table-dark'>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($contatos as $pos => $cadaContato){
        $partes = explode(";", $cadaContato);
        echo '<tr>';
          echo '<td>' . $partes[0] . '</td>';
          echo '<td>' . $partes[1] . '</td>';
          echo '<td>' . $partes[2] . '</td>';
          echo "<td>
              <a href='/excluir?id={$pos}' class='btn btn-danger btn-sm'>Excluir</a>
              <a href='/editar?id={$pos}' class='btn btn-warning'>Editar</a> 
          </td>";
        echo '</tr>';
      }
    ?>
</table>