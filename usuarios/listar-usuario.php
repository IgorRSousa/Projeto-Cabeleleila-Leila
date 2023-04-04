<h1>Listar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Usuario</th>";
            print "<th>E-mail</th>";
            print "<th>Nivel de Acesso</th>";
            print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->usuario."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->tipo."</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-warning'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja Excluir o Usuario')){
                                            location.href='?page=salvar&acao=excluir&id=".$row->id."'}
                                            else{false}\" class='btn btn-danger'>Excluir</button>
                      </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>