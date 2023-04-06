<?php
    switch($_REQUEST["acao"]){ 
        case "agendar":
            $data = new DateTime($_POST["data"]);

            $sqlData = "SELECT * FROM agendamentos WHERE dataehora='".$_POST["data"]."'";
            $resData = $conn->query($sqlData);
            $qtd = $resData->num_rows;

            $sqlSemana = "SELECT dataehora, nome, DATE_FORMAT(dataehora, '%Y-%U') AS semana FROM agendamentos WHERE DATE_FORMAT(dataehora, '%Y-%U') ='".$data->format('Y-W')."' AND nome='".$_SESSION["nome"]."' AND DATEDIFF(dataehora, '".$_POST["data"]."')>2";
            
            $resSemana = $conn->query($sqlSemana);
            $linhas = $resSemana->num_rows;
            
            if($qtd > 0){
                print("<script>alert('Esse horario já foi agendado neste dia!');</script>");
                print("<script>location.href='?page=agendar';</script>");
            }else{
                if($linhas > 0){
                    print "<script>if(confirm('Existe um agendamento feito para essa semana gostaria de fazer no mesmo dia ?')){
                            location.href='?page=agendarJunto&data=".$_POST["data"]."'}
                            else{false}</script>";
                }
                $nome = $_SESSION['nome'];
                $servico = $_POST["servico"];
                $observacao = $_POST["observacao"];
                $data = $_POST["data"];
                
                $sql = "INSERT INTO agendamentos (nome, servico, dataehora, observacao) VALUES ('{$nome }', '{$servico}', '{$data}', '{$observacao}');";
                $res = $conn->query($sql);

                if($res == true){
                    print("<script>alert('Serviço agendado com Sucesso!');</script>");
                    print("<script>location.href='?page=listarAgenda';</script>");
                }else{
                    print("<script>alert('Falha no agendamento!');</script>");
                    print("<script>location.href='?page=agendar';</script>");
                }
            }   
            break;
            
        case "editar":
            $nome = $_SESSION['nome'];
            $servico = $_POST["servico"];
            $data = $_POST["data"];
            $observacao = $_POST["observacao"];

            $sql = "UPDATE agendamentos SET nome='{$nome}', servico='{$servico}', dataehora='{$data}', observacao='{$observacao}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print("<script>alert('Serviço reagendado com Sucesso!');</script>");
                print("<script>location.href='?page=listarAgenda';</script>");
            }else{
                print("<script>alert('Falha no reagendamento!');</script>");
                print("<script>location.href='?page=agendar';</script>");
            }
            break;
        
        case "excluir":
        
            $sql = "DELETE FROM agendamentos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            
            if($res == true){
                print("<script>alert('Excluido com sucesso!');</script>");
                print("<script>location.href='?page=listarAgenda';</script>");
            }else{
                print("<script>alert('Falha ao Excluido!');</script>");
                print("<script>location.href='?page=listarAgenda';</script>");
            }
            break;
    }

?>