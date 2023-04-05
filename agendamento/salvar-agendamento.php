<?php
    switch($_REQUEST["acao"]){ 
        case "agendar":
            $nome = $_SESSION['nome'];
            $servico = $_POST["servico"];
            $data = $_POST["data"];
            $observacao = $_POST["observacao"];
            

            $sql = "INSERT INTO agendamentos (nome, servico, dataehora, observacao) VALUES ('{$nome }', '{$servico}', '{$data}', '{$observacao}');";
            $res = $conn->query($sql);

            if($res == true){
                print("<script>alert('Serviço agendado com Sucesso!');</script>");
                print("<script>location.href='?page=listarAgenda';</script>");
            }else{
                print("<script>alert('Falha no agendamento!');</script>");
                print("<script>location.href='?page=agendar';</script>");
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