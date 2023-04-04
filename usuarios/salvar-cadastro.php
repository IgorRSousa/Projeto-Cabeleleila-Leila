<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = md5($_POST["senha"]);
            $tipo = $_POST["tipo"];
            $data = date('d/m/Y');


            $sql = "INSERT INTO usuarios (nome, email, usuario, senha, tipo, data) VALUES('{$nome}', '{$email}', '{$usuario}', '{$senha}', ' {$tipo}', '{$data}')";

            $res = $conn->query($sql);
            
            if($res == true){
                print("<script>alert('Cadastrado Com Sucesso!');</script>");
                print("<script>location.href='?page=listar';</script>");
            }else{
                print("<script>alert('Falha no Cadastro!');</script>");
                print("<script>location.href='?page=novo';</script>");
            }
            
            break;

        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = md5($_POST["senha"]);
            $tipo = $_POST["tipo"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', usuario='{$usuario}', senha='{$senha}', tipo='{$tipo}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            
            if($res == true){
                print("<script>alert('Editado com sucesso!');</script>");
                print("<script>location.href='?page=listar';</script>");
            }else{
                print("<script>alert('Falha ao Editar!');</script>");
                print("<script>location.href='?page=novo';</script>");
            }

            break;

        case "excluir":
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            
            if($res == true){
                print("<script>alert('Excluido com sucesso!');</script>");
                print("<script>location.href='?page=listar';</script>");
            }else{
                print("<script>alert('Falha ao Excluido!');</script>");
                print("<script>location.href='?page=novo';</script>");
            }
            break;

        default:
            break;
    }
?>