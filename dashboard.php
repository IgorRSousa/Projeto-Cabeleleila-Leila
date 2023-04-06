<?php
    session_start();
    if(empty($_SESSION)){
        print("<script>location.href='index.php'</script>");
    }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <style>
        .sair{align-items: flex-end;}
    </style>

    <title>Cabeleleila Leila</title>
  </head>
  <body>
  <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php"><?php print 'Ola, '.$_SESSION['nome'];?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
                <a class="<?php echo (@$_REQUEST['page'] == "") ? "nav-link active" : "nav-link"; ?>" aria-current="page" href="dashboard.php">Home</a>
            </li>
            
            <li class="nav-item">
                <a class='<?php echo (@$_REQUEST['page'] == 'agendar') ? 'nav-link active' : 'nav-link'; ?>' href="?page=agendar">Agendar Serviço</a>
            </li>
            
            <li class="nav-item">
                <a class='<?php echo (@$_REQUEST['page'] == 'listarAgenda') ? 'nav-link active' : 'nav-link'; ?>' href="?page=listarAgenda">Listar Agenda</a>
            </li>

            <?php 
                if($_SESSION["tipo"] == 1){
                    include("includes/nivelUmDeAcesso.php");
                }
            ?>
        </ul>
            <form action="?page=sair" method="post">
                <button class="btn btn-outline-danger" type="submit">Sair</button>
            </form>
            
        </div>
    </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("configuracao.php");
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("usuarios/cadastro-usuario.php");
                            break;
                        case "listar":
                            include("usuarios/listar-usuario.php");
                            break;
                        case "salvar":
                            include("usuarios/salvar-cadastro.php");
                            break;
                        case "editar":
                            include("usuarios/editar-cadastro.php");
                            break;
                        
                        case "agendarJunto":
                            include("agendamento/agendar-mesma-semana.php");
                            break;
                        case "agendar":
                            include("agendamento/agendar-servico.php");
                            break;    
                        case "listarAgenda":    
                            include("agendamento/listar-agendamentos.php");
                            break;
                        case "salvaragendamento":
                            include("agendamento/salvar-agendamento.php");
                            break;
                        case "editarAgenda":
                            include("agendamento/editar-agenda.php");
                            break;
                        case "sair":
                            include("login/logout.php");
                        default:
                            include("home.php");
                    }
                ?>
            </div>
        </div>
    </div>
                    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>