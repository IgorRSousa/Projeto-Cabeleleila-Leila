<?php 
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty("senha")))){
        print "<script>location.href='index.php';</script>";
    }

    include('../configuracao.php');

    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND senha = '{$senha}'";
    $res = $conn->query($sql) or die($conn->error);
    
    $row = $res -> fetch_object();
    
    $qtde = $res->num_rows;

    if($qtde > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;

        print "<script>location.href='../dashboard.php'</script>";
    }else{
        print "<script>alert('Usuario ou Senha Incorreta!')</script>";
        print "<script>location.href='../index.php'</script>";
    }

?>