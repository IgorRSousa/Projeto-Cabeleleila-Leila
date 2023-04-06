<h1>Cadastro de Usuario</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar" required>
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div>
        <label>Nivel de Acesso</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value = 1 required>
            <label class="form-check-label" for="inlineRadio1">Nivel 1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value = 2 required>
            <label class="form-check-label" for="inlineRadio2">Nivel 2</label>
        </div>
    </div>
    <br>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>