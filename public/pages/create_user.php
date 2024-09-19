<?php
require("/home/miguel/cursos/php/pratical/arch/bootstrap.php");
?>



<h1> Criar Usuário</h1>
<br>
<?= getFlash('message')?>
<form action="/pages/forms/create_user.php" method="POST" role="form">
  <div class="form-group">
    <label>Nome: </label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label>Sobrenome: </label>
    <input type="text" class="form-control" name="sobrenome">
  </div>
  <div class="form-group">
    <label>Email: </label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Password: </label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form> 
