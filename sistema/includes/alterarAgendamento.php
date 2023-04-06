<?php
    $hoje = new DateTime (date('Y-m-d H:i'));
    $agendamento = new DateTime($row->dataehora);
    $diferenca = $hoje->diff($agendamento);
    
    if(($diferenca->d > 2) or ($_SESSION["tipo"] == 1)){
        print ' <form action="?page=salvaragendamento" method="post">
                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="id" value="'.$row->id.'">
                    <div class="mb-3">
                        <label>Nome do(a) cliente</label>
                        <input type="text" name="nome" class="form-control" value="'.$row->nome.'">
                    </div>
                
                    <div class="mb-3">
                        <label>Serviço desejado</label>
                        <input type="text" name="servico" class="form-control" value="'.$row->servico.'">
                    </div>
                    
                    <div class="mb-3">
                        <label>Data do Agendamento</label>
                        <input type="datetime-local" name="data" class="form-control" value="'.$row->dataehora.'">
                    </div>
                
                    <div class="mb-3">
                        <label>Observação</label>
                        <input type="text" name="observacao" class="form-control" value="'.$row->observacao.'">
                    </div>
        
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>';
    }else{
        print ' <form action="?page=listarAgenda" method="post">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="'.$row->id.'">
                <div class="mb-3">
                    <label>Nome do(a) cliente</label>
                    <input type="text" name="nome" class="form-control" value="'.$row->nome.'" disabled="">
                </div>
                
                <div class="mb-3">
                    <label>Serviço desejado</label>
                    <input type="text" name="servico" class="form-control" value="'.$row->servico.'" disabled="">
                </div>
                    
                <div class="mb-3">
                    <label>Data do Agendamento</label>
                    <input type="datetime-local" name="data" class="form-control" value="'.$row->dataehora.'" disabled="">
                </div>
                
                <div class="mb-3">
                    <label>Observação</label>
                    <input type="text" name="observacao" class="form-control" value="'.$row->observacao.'" disabled="">
                </div>
                <div id="passwordHelpBlock" class="form-text mb-3">
                    Menos de 48 horas para o agendameto, caso dejese reagendar ou fazer outra alteração  ligar no Salão.
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Voltar</button>
                </div>
            </form>';
        }
?>