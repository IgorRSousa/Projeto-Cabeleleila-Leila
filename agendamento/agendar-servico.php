<h1>Agendar Serviço</h1>
<form action="?page=salvaragendamento" method="post">
    <input type="hidden" name="acao" value="agendar">

    <div class="mb-3">
        <label>Serviço desejado</label>
        <input type="text" name="servico" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Data do Agendamento</label>
        <input type="datetime-local" name="data" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Observação</label>
        <input type="text" name="observacao" class="form-control" >
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>