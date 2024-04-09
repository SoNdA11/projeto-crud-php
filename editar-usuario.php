<h1>Editar Usuário</h1>

<?php 
    // Esse php é para editar 1 pessoa 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>



<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">

        <!-- Campo nome -->
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">

    </div>

    <div class="mb-3">
        
        <!-- Campo email -->
        <label>E-mail</label>
        <input type="email" name="email"  value="<?php print $row->email; ?>" class="form-control">

    </div>

    <div class="mb-3">
        
        <!-- Campo senha -->
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>

    </div>

    <div class="mb-3">
        
        <!-- Campo data de nascimento -->
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc"  value="<?php print $row->data_nasc; ?>" class="form-control">

    </div>


    <div class="mb-3">
        
        <!-- Campo botão para enviar -->
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>


</form>