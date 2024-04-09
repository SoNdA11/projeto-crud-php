<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

        <!-- Campo nome -->
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">

    </div>

    <div class="mb-3">
        
        <!-- Campo email -->
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">

    </div>

    <div class="mb-3">
        
        <!-- Campo senha -->
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">

    </div>

    <div class="mb-3">
        
        <!-- Campo data de nascimento -->
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">

    </div>


    <div class="mb-3">
        
        <!-- Campo botão para enviar -->
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>


</form>