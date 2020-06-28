<?php if(isset($_GET['erro'])) { ?>
    <div class="alert alert-danger" role="alert">
        Usuario ou senha invalido
    </div>
<?php } ?>
<h1 style="text-align: center;">Bem-vindo a Dog Cursos</h1>


<div class="container">

    <form method="post" action="login.php">
    <div class="form-group">
        <label for="">Usuario</label>
        <input class="form-control" name="usuario" type="text" placeholder="Nome do ususario">
    </div>
    <div class="form-group">
        <label for="">Senha</label>
        <input class="form-control" name="senha" placeholder="Senha" type="password" >
    </div>

        <input type="submit" value="Entrar">
    
    </form>

</div>