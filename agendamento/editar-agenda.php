<h1>Editar agendamento</h1>
<?php
    $sql = "SELECT * FROM agendamentos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

    include("./includes/alterarAgendamento.php");
?>