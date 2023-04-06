<h1>Lista de agendamentos na mesma semana</h1>
<?php
    $data = new DateTime($_REQUEST["data"]);
    $sql = "SELECT id, nome, servico, dataehora, observacao, DATE_FORMAT(dataehora, '%Y-%U') AS semana_data1 
            FROM agendamentos 
            WHERE DATE_FORMAT(dataehora, '%Y-%U') = '".$data->format('Y-W')."' AND nome='".$_SESSION['nome']."' AND DATEDIFF(dataehora, '".$_REQUEST["data"]."')>2 ORDER BY dataehora"; 

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print "<table class='table table-hover table-b ordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Serviço</th>";
            print "<th>Data agendada</th>";
            print "<th>Observações</th>";
            print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->servico."</td>";
                print "<td>".$row->dataehora."</td>";
                print "<td>".$row->observacao."</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editarAgenda&id=".$row->id."'\" class='btn btn-warning'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja Excluir o Agendamento')){
                                            location.href='?page=salvaragendamento&acao=excluir&id=".$row->id."'}
                                            else{false}\" class='btn btn-danger'>Excluir</button>
                      </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>